<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j10501contact_settings
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		$siteConfig         = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig           = $siteConfig->get();

		$configurationPanel 			= $componentArgs[ 'configurationPanel' ];
		$lists 							= $componentArgs[ 'lists' ];

		if ( $jrConfig[ 'advanced_site_config' ] == 1 )
			{
			$configurationPanel->startPanel( jr_gettext( "_JOMRES_CONTACT_SETTINGS", '_JOMRES_CONTACT_SETTINGS', false ) );
			
			$configurationPanel->insertDescription(jr_gettext( '_JOMRES_CONTACT_SETTINGS_DESC', '_JOMRES_CONTACT_SETTINGS_DESC', false ));
	
			$configurationPanel->setleft( jr_gettext( '_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', '_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', false ) );
			$configurationPanel->setmiddle( $lists[ 'override_property_contact_details' ] );
			$configurationPanel->setright( jr_gettext( '_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', '_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', false ) );
			$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_override_property_contact_email" value="' . $jrConfig[ 'override_property_contact_email' ] . '" />' );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', false ) );
			$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_override_property_contact_tel" value="' . $jrConfig[ 'override_property_contact_tel' ] . '" />' );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', false ) );
			$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_override_property_contact_fax" value="' . $jrConfig[ 'override_property_contact_fax' ] . '" />' );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
		
			$configurationPanel->endPanel();
			}
		}
	
	function addCountryRegionJs()
		{
		?>
<script type="text/javascript">
<!--
jomresJquery(function(){
	jomresJquery("#cfg_business_country").change(function(){
		var selectedValue = jomresJquery(this).find(":selected").val();
		clause = "&task=get_region_dropdown_for_country_code&country="+selectedValue+"&input_name=cfg_business_region";
		jomresJquery.get(live_site_ajax + clause, function (data) {
			populateDiv("business_region_div",data);
			});
		});
	});
//-->
</script>
		<?php
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
