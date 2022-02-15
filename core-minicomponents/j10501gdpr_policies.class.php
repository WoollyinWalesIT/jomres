<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* @version Jomres 10.2.0
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

class j10501gdpr_policies
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

		$this->addCountryRegionJs();

		$configurationPanel->startPanel(jr_gettext('_JOMRES_GDPR_POLICIES', '_JOMRES_GDPR_POLICIES', false));
		$lists = $componentArgs[ 'lists' ];
		$configurationPanel->insertDescription(jr_gettext('_JOMRES_GDPR_POLICIES_DESC', '_JOMRES_GDPR_POLICIES_DESC', false));

		$configurationPanel->setleft(jr_gettext('_JOMRES_GDPR_CONFIG_ENABLE', '_JOMRES_GDPR_CONFIG_ENABLE', false));
		$configurationPanel->setmiddle($lists[ 'enable_gdpr_compliant_fucntionality' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_GDPR_CONFIG_ENABLE_DESC', '_JOMRES_GDPR_CONFIG_ENABLE_DESC', false));
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_GDPR_BOOKING_RETENTION', '_JOMRES_GDPR_BOOKING_RETENTION', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_gdpr_booking_retention_period" value="'.$jrConfig[ 'gdpr_booking_retention_period' ].'" />');
		$configurationPanel->setright(jr_gettext('_JOMRES_GDPR_BOOKING_RETENTION_DESC', '_JOMRES_GDPR_BOOKING_RETENTION_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_GDPR_INVOICE_RETENTION', '_JOMRES_GDPR_INVOICE_RETENTION', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_gdpr_other_invoice_retention_period" value="'.$jrConfig[ 'gdpr_other_invoice_retention_period' ].'" />');
		$configurationPanel->setright(jr_gettext('_JOMRES_GDPR_INVOICE_RETENTION_DESC', '_JOMRES_GDPR_INVOICE_RETENTION_DESC', false));
		$configurationPanel->insertSetting();


		
		//plugins can add options to this tab
		$MiniComponents->triggerEvent('10533', $componentArgs);

		$configurationPanel->endPanel();
	}

	public function addCountryRegionJs()
	{
		?>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function(){
	jomresJquery("#cfg_business_country").change(function(){
		var selectedValue = jomresJquery(this).val();
		jomresJquery.ajax({
			type: 'GET',
			url: live_site_ajax + '&task=get_region_dropdown_for_country_code',
			data: {
				country: selectedValue,
				input_name: 'cfg_business_region'
				},
			success: function(data)
				{
				populateDiv("business_region_div",data);
				}
			});
		});
    }, false);
</script>
		<?php

	}


	public function getRetVals()
	{
		return null;
	}
}
