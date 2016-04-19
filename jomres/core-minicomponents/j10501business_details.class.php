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

class j10501business_details
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
		
		$country_dropdown   = createSimpleCountriesDropdown( $jrConfig[ 'business_country' ] , "cfg_business_country" );
		$region_dropdown	= setupRegions( $jrConfig[ 'business_country' ], $jrConfig[ 'business_region' ] , false, "cfg_business_region");
		
		$this->addCountryRegionJs();


		if ( $jrConfig[ 'advanced_site_config' ] == 1 )
			{
			$configurationPanel->startPanel( jr_gettext( "_JOMRES_COM_YOURBUSINESS", _JOMRES_COM_YOURBUSINESS, false ) );
			
			$configurationPanel->insertDescription(jr_gettext( '_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', _JOMRES_COM_YOURBUSINESS_INSTRUCTIONS, false ));
	
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_YOURBUSINESS_NAME', _JOMRES_COM_YOURBUSINESS_NAME, false ) );
			$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_business_name" value="' . $jrConfig[ 'business_name' ] . '" />' );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_YOURBUSINESS_VATNO', _JOMRES_COM_YOURBUSINESS_VATNO, false ) );
			$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_business_vat_number" value="' . $jrConfig[ 'business_vat_number' ] . '" />' );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_YOURBUSINESSADDRESS', _JOMRES_COM_YOURBUSINESSADDRESS, false ) );
			$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_business_address" value="' . $jrConfig[ 'business_address' ] . '" />' );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET, false ) );
			$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_business_street" value="' . $jrConfig[ 'business_street' ] . '" />' );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN, false ) );
			$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_business_town" value="' . $jrConfig[ 'business_town' ] . '" />' );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION, false ) );
			$configurationPanel->setmiddle( '<div id="business_region_div">'. $region_dropdown .' </div>' );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY, false ) );
			$configurationPanel->setmiddle( $country_dropdown );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE, false ) );
			$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_business_postcode" value="' . $jrConfig[ 'business_postcode' ] . '" />' );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE, false ) );
			$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_business_telephone" value="' . $jrConfig[ 'business_telephone' ] . '" />' );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', _JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL, false ) );
			$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_business_email" value="' . $jrConfig[ 'business_email' ] . '" />' );
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
