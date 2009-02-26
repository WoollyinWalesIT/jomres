<?php
/**
#
 * Mini-component core file: Constructs and displays form popup link
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

/**
#
 * Creates the link that appears in the gateways config panel
 #
* @package Jomres
#
@see j00501gateways
#
 */
class j00509form {
	/**
	#
	 * Constructor: Creates the link that appears in the gateways config panel
	#
	 */
	function j00509form($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $eLiveSite,$jomresConfig_live_site;
		$plugin="form";

		$jomresConfig_live_site=$componentArgs['jomresConfig_live_site'];
		$defaultProperty=getDefaultProperty();
		$query="SELECT value FROM #__jomres_pluginsettings WHERE prid LIKE '".(int)$defaultProperty."' AND plugin LIKE '$plugin' AND setting LIKE 'active' AND value LIKE '1'";
		$activeList =doSelectSql($query);
		if (count($activeList)>0)
			$active=jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES);
		else
			$active=jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO);
		$status = 'status=no,toolbar=yes,scrollbars=yes,titlebar=no,menubar=yes,resizable=yes,width=750,height=500,directories=no,location=no';
		$link = JOMRES_SITEPAGE_URL."&task=editGateway&popup=1&plugin=$plugin";
		$gatewayname=jr_gettext('_JOMRES_CUSTOMTEXT_GATEWAYNAME'.$plugin,ucwords($plugin),false,false);
		$pluginLink="<a href=\"javascript:void window.open('".$link."', 'win2', '".$status."');\" title=\"".$plugin."\">".$gatewayname."</a>";
		$button="<IMG SRC=\"".$eLiveSite."/j00510".$plugin.".gif"."\" border=\"0\">";
		$this->outputArray=array('button'=>$button,'link'=>$pluginLink,'active'=>$active);
		}

	function touch_template_language()
		{
		$plugin="form";
		echo jr_gettext('_JOMRES_CUSTOMTEXT_GATEWAYNAME'.$plugin,ucwords($plugin));
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
		return $this->outputArray;
		}
	}

?>