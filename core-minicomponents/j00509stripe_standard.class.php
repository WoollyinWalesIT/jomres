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

class j00509stripe_standard {
	function __construct($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
			
		$plugin="stripe_standard";
        
        $this->outputArray = array();

		$defaultProperty=getDefaultProperty();
		$query="SELECT value FROM #__jomres_pluginsettings WHERE prid = '".(int)$defaultProperty."' AND plugin = '$plugin' AND setting = 'active' AND value = '1'";
		$activeList =doSelectSql($query);
		if (!empty($activeList))
			$active=jr_gettext('_JOMRES_COM_MR_YES','_JOMRES_COM_MR_YES',false);
		else
			$active=jr_gettext('_JOMRES_COM_MR_NO','_JOMRES_COM_MR_NO',false);

		$this->outputArray=array();

		$status = 'status=no,toolbar=yes,scrollbars=yes,titlebar=no,menubar=yes,resizable=yes,width=800,height=500,directories=no,location=no';
		$link = JOMRES_SITEPAGE_URL_NOSEF."&task=editGateway&popup=1&tmpl=".get_showtime("tmplcomponent")."&plugin=$plugin";
		$gatewayname=jr_gettext('_JOMRES_CUSTOMTEXT_GATEWAYNAME'.$plugin,ucwords($plugin),false,false);
		$pluginLink="<a href=\"javascript:void window.open('".$link."', 'win2', '".$status."');\" title=\"".$plugin."\">".$gatewayname."</a>";
		$button= JOMRES_IMAGES_RELPATH."j00510".$plugin.".png";

		$balance_payments_supported = "0"; // This setting allows individual gateways to declare if they support balance payments or not. If it's not set at all Jomres will know that the gateway is an older version that does not support balance payments and the gateway will not be offered on the "show gateways for invoice" page. This allows us to improve the paypal gateway override functionality without offering older gateways that can't handle secondary payments.

		$this->outputArray=array('button'=>$button,'link'=>$pluginLink, 'active'=>$active , "balance_payments_supported" => $balance_payments_supported );
		}

	function touch_template_language()
		{
		$plugin="stripe";
		echo jr_gettext('_JOMRES_CUSTOMTEXT_GATEWAYNAME'.$plugin,ucwords($plugin));
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->outputArray;
		}
	}
