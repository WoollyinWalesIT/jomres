<?php
/**
#
 * Mini-component core file: Manages user information
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
 * Manages user access rights
 #
* @package Jomres
#
 */
class j00002usermanagement {

	/**
	#
	 * Manages user access rights
	#
	 */
	function j00002usermanagement($componentArgs=null)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."libraries".JRDS."jomres".JRDS."cms_specific".JRDS._JOMRES_DETECTED_CMS.JRDS."init_user.php");

		$thisJRUser= new jr_user();
		if ($thisJRUser->userIsManager==TRUE)
			$thisJRUser->check_currentproperty();
		$thisProperty = trim( jomresGetParam( $_REQUEST, 'thisProperty', 0 ) );
		if (in_array($thisProperty,$thisJRUser->authorisedProperties) && $thisProperty != $thisJRUser->currentproperty)
			{
			if ($thisJRUser->userIsManager==TRUE && $thisProperty>0)
				{
				$thisJRUser->set_currentproperty($thisProperty);
				$qString=$_SERVER['QUERY_STRING'];
				jomresRedirect( jomresURL("index.php?".$qString) );
				}
			}
		if ($thisJRUser->currentproperty == 0 && $thisJRUser->userIsManager)
			$thisJRUser->setToAnyAuthorisedProperty();
		$this->userObject=$thisJRUser;
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
		return $this->userObject;
		}
	}


?>