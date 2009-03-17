<?php
/**
#
 * Mini-component core file: Constructs and displays cheque popup link
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################
//

class j00509cheque {
	function j00509cheque($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $eLiveSite,$jomresConfig_live_site;
		$plugin="cheque";

		$jomresConfig_live_site=$componentArgs['jomresConfig_live_site'];
		$defaultProperty=getDefaultProperty();
		$query="SELECT value FROM #__jomres_pluginsettings WHERE prid = '$defaultProperty' AND plugin = '$plugin' AND setting = 'active' AND value = '1'";
		$activeList =doSelectSql($query);
		if (count($activeList)>0)
			$active=jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES);
		else
			$active=jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO);
		$status = 'status=no,toolbar=yes,scrollbars=yes,titlebar=no,menubar=yes,resizable=yes,width=750,height=500,directories=no,location=no';
		$link = JOMRES_SITEPAGE_URL_NOHTML."&task=editGateway&popup=1&plugin=$plugin";
		$gatewayname=jr_gettext('_JOMRES_CUSTOMTEXT_GATEWAYNAME'.$plugin,ucwords($plugin),false,false);
		$pluginLink="<a href=\"javascript:void window.open('".$link."', 'win2', '".$status."');\" title=\"".$plugin."\">".$gatewayname."</a>";
		$button="<IMG SRC=\"".$eLiveSite."/j00510".$plugin.".gif"."\" border=\"0\">";
	    $this->outputArray=array('button'=>$button,'link'=>$pluginLink,'active'=>$active);
		}

	function touch_template_language()
		{
		$plugin="cheque";
		echo jr_gettext('_JOMRES_CUSTOMTEXT_GATEWAYNAME'.$plugin,ucwords($plugin));
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->outputArray;
		}
	}

?>