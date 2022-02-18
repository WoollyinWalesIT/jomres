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

class j10501input_filtering
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

			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if ( !isset($jrConfig[ 'admin_options_level' ]) ) {
			$jrConfig[ 'admin_options_level' ] = 0;
		}

		if ( $jrConfig[ 'admin_options_level' ] < 2 ) {
			return;
		}

		$configurationPanel = $componentArgs[ 'configurationPanel' ];
		$lists = $componentArgs[ 'lists' ];
		$filtering_level_dropdown = $componentArgs[ 'filtering_level_dropdown' ];
		
		$configurationPanel->startPanel(jr_gettext('_JOMRES_INPUTFILTERING', '_JOMRES_INPUTFILTERING', false));
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_ALLOWHTMLEDITOR', '_JOMRES_COM_ALLOWHTMLEDITOR', false));
		$configurationPanel->setmiddle($lists[ 'allowHTMLeditor' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', '_JOMRES_COM_ALLOWHTMLEDITOR_DESC', false));
		$configurationPanel->insertSetting();

		if (!isset($jrConfig[ 'html_purifier_allowed_tags' ])) {
			$jrConfig[ 'html_purifier_allowed_tags' ] = 'p,b,strong,a[href],i,img[src]';
		}

		if (!isset($jrConfig[ 'inputs_allowing_html' ])) {
			$jrConfig[ 'inputs_allowing_html' ] = 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers email_text description';
		}
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_INPUTFILTERING_LEVEL_TITLE', '_JOMRES_INPUTFILTERING_LEVEL_TITLE', false));
		$configurationPanel->setmiddle($filtering_level_dropdown);
		$configurationPanel->setright(jr_gettext('_JOMRES_INPUTFILTERING_LEVEL_DESC', '_JOMRES_INPUTFILTERING_LEVEL_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', false));
		$configurationPanel->setmiddle('<textarea type="text" class="input-large" name="cfg_html_purifier_allowed_tags" >'.$jrConfig[ 'html_purifier_allowed_tags' ].' </textarea>');
		$configurationPanel->setright(jr_gettext('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_INPUTFILTERING_INPUTS_TITLE', '_JOMRES_INPUTFILTERING_INPUTS_TITLE', false));
		$configurationPanel->setmiddle('<textarea class="input-large" name="cfg_inputs_allowing_html" >'.$jrConfig[ 'inputs_allowing_html' ].'</textarea>');
		$configurationPanel->setright(jr_gettext('_JOMRES_INPUTFILTERING_INPUTS_DESC', '_JOMRES_INPUTFILTERING_INPUTS_DESC', false));
		$configurationPanel->insertSetting();
		
		$configurationPanel->endPanel();
	}


	public function getRetVals()
	{
		return null;
	}
}
