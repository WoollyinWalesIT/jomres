<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.5
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

class j10501integrated_search
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
		
		if (!this_cms_is_wordpress()) {
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
		$geosearchDropdownList = $componentArgs[ 'geosearchDropdownList' ];

		$configurationPanel->startPanel(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', false));

		$configurationPanel->insertDescription(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', false));

		/* $configurationPanel->setleft( jr_gettext( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', _JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE, false ) );
		$configurationPanel->setmiddle( $lists[ 'integratedSearch_enable' ] );
		$configurationPanel->setright( jr_gettext( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', _JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC, false ) );
		$configurationPanel->insertSetting();

		$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', _JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS, false ) );
		$configurationPanel->setmiddle( $lists[ 'integratedSearch_useCols' ] );
		$configurationPanel->setright( jr_gettext( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', _JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC, false ) );
		$configurationPanel->insertSetting(); */

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', false));
		$configurationPanel->setmiddle($lists[ 'integratedSearch_selectcombo' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', false));
		$configurationPanel->setmiddle($lists[ 'integratedSearch_propertyname' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', false));
		$configurationPanel->setmiddle($lists[ 'integratedSearch_propertyname_dropdown' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', '_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', false));
		$configurationPanel->setmiddle($geosearchDropdownList);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', false));
		$configurationPanel->setmiddle($lists[ 'integratedSearch_geosearchtype_dropdown' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', false));
		$configurationPanel->setmiddle($lists[ 'integratedSearch_ptype' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', false));
		$configurationPanel->setmiddle($lists[ 'integratedSearch_ptype_dropdown' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', false));
		$configurationPanel->setmiddle($lists[ 'integratedSearch_room_type' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', false));
		$configurationPanel->setmiddle($lists[ 'integratedSearch_room_type_dropdown' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', false));
		$configurationPanel->setmiddle($lists[ 'integratedSearch_features' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', false));
		$configurationPanel->setmiddle($lists[ 'integratedSearch_features_dropdown' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', false));
		$configurationPanel->setmiddle($lists[ 'integratedSearch_description' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', false));
		$configurationPanel->setmiddle($lists[ 'integratedSearch_availability' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', false));
		$configurationPanel->setmiddle($lists[ 'integratedSearch_priceranges' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_integratedSearch_pricerange_increments" value="'.$jrConfig[ 'integratedSearch_pricerange_increments' ].'">');
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', false));
		$configurationPanel->setmiddle($lists[ 'integratedSearch_guestnumber' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', false));
		$configurationPanel->setmiddle($lists[ 'integratedSearch_stars' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', false));
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_HCATEGORY', '_JOMRES_HCATEGORY', false));
		$configurationPanel->setmiddle($lists[ 'integratedSearch_category' ]);
		$configurationPanel->setright('');
		$configurationPanel->insertSetting();

		$configurationPanel->endPanel();
	}


	public function getRetVals()
	{
		return null;
	}
}
