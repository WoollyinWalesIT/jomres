<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.25.0
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

class j10501search_options
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

		if ( $jrConfig[ 'admin_options_level' ] < 1 ) {
			return;
		}

		$configurationPanel = $componentArgs[ 'configurationPanel' ];
		$lists = $componentArgs[ 'lists' ];
		$layouts = $componentArgs[ 'layouts' ];
		$guestnumbersearchDropdownList = $componentArgs[ 'guestnumbersearchDropdownList' ];
		$sortArrayDropdown = $componentArgs[ 'sortArrayDropdown' ];

		$configurationPanel->startPanel(jr_gettext('JOMRES_COM_A_SEARCHOPTIONSTAB', 'JOMRES_COM_A_SEARCHOPTIONSTAB', false));

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_LAYOUTS_DEFAULT', '_JOMRES_COM_LAYOUTS_DEFAULT', false));
		$configurationPanel->setmiddle($layouts);
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', false));
		$configurationPanel->setmiddle($guestnumbersearchDropdownList);
		$configurationPanel->setright(jr_gettext('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_PROPERTYLIST_FILTERS_SHOW', '_JOMRES_PROPERTYLIST_FILTERS_SHOW', false));
		$configurationPanel->setmiddle($lists[ 'show_search_order' ]);
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', false));
		$configurationPanel->setmiddle($sortArrayDropdown);
		$configurationPanel->setright(jr_gettext('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_LIVE_SCROLLING', '_JOMRES_LIVE_SCROLLING', false));
		$configurationPanel->setmiddle($lists[ 'live_scrolling_enabled' ]);
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_PROPERTYLISTDESC', '_JOMRES_COM_PROPERTYLISTDESC', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_propertyListDescriptionLimit" value="'.$jrConfig[ 'propertyListDescriptionLimit' ].'" />');
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_PROPERTYLISTDESC_DESC', '_JOMRES_COM_PROPERTYLISTDESC_DESC', false));
		$configurationPanel->insertSetting();

		/* $configurationPanel->setleft( jr_gettext( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', _JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT, false ) );
		$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_randomsearchlimit" value="' . $jrConfig[ 'randomsearchlimit' ] . '" />' );
		$configurationPanel->setright( jr_gettext( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', _JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC, false ) );
		$configurationPanel->insertSetting(); */

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_LISTLIMIT', '_JOMRES_COM_A_LISTLIMIT', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_property_list_limit" value="'.$jrConfig[ 'property_list_limit' ].'" />');
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_LISTLIMIT_DESC', '_JOMRES_COM_A_LISTLIMIT_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('GUEST_BUDGET_FEATURE_SWITCH', 'GUEST_BUDGET_FEATURE_SWITCH', false));
		$configurationPanel->setmiddle($lists[ 'use_budget_feature' ]);
		$configurationPanel->setright(jr_gettext('GUEST_BUDGET_FEATURE_SWITCH_DESC', 'GUEST_BUDGET_FEATURE_SWITCH_DESC', false));
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft(jr_gettext('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'PROPERTYLIST_IMAGES_AS_SLIDESHOW', false));
		$configurationPanel->setmiddle($lists[ 'plist_images_as_slideshow' ]);
		$configurationPanel->setright(jr_gettext('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', false));
		$configurationPanel->insertSetting();
		
		//plugins can add options to this tab
		$MiniComponents->triggerEvent('10529', $componentArgs);

		$configurationPanel->endPanel();
	}


	public function getRetVals()
	{
		return null;
	}
}
