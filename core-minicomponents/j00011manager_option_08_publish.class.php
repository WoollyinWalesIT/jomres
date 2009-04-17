<?php
/**
#
 * Mini-component core file: Constructs and displays the receptionist's menu
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
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j00011manager_option_08_publish {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00011manager_option_08_publish($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$published=$componentArgs['published'];
		if ($published)
			{
			$pubmsg = jr_gettext('_JOMRES_COM_MR_VRCT_UNPUBLISH',_JOMRES_COM_MR_VRCT_UNPUBLISH,false);
			$image = 'PublishProperty';
			}
		else
			{
			$pubmsg = jr_gettext('_JOMRES_COM_MR_VRCT_PUBLISH',_JOMRES_COM_MR_VRCT_PUBLISH,false);
			$image = 'UnpublishProperty';
			}
		$this->cpanelButton=jomres_mainmenu_option(jomresURL(JOMRES_SITEPAGE_URL.'&no_html=1&task=publishProperty'.jomresURLToken()), $image.".png", $pubmsg);
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}
	}
?>