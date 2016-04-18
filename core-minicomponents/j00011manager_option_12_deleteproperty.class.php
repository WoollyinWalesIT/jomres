<?php
/**
* Jomres CMS Agnostic Plugin
* @author Woollyinwales IT <sales@jomres.net>
* @version Jomres 9 
* @package Jomres
* @copyright	2005-2015 Woollyinwales IT
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j00011manager_option_12_deleteproperty {
	function __construct($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$this->cpanelButton = false;
		$thisJRUser=jomres_getSingleton('jr_user');
		if ( $thisJRUser->superPropertyManager)
			$this->cpanelButton=jomres_mainmenu_option(JOMRES_SITEPAGE_URL."&task=deleteProperty", 'WasteBasket.png', jr_gettext('_JOMRES_COM_MR_PROPERTY_DELETE',_JOMRES_COM_MR_PROPERTY_DELETE,false,false),null,jr_gettext("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES" , _JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES ,false,false),false);
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}
	}
?>