<?php
/**
#
 * Mini-component core file: Closes the edit creditcard screen on click Cancel
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
 * Closes the edit creditcard screen on click Cancel
 #
* @package Jomres
#
 */
class j02234canceleditcreditcard {
	/**
	#
	 * Constructor: Closes the edit creditcard screen on click Cancel
	#
	 */
	function j02234canceleditcreditcard()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'save_creditcard.html' );
		$tmpl->displayParsedTemplate();
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
		return null;
		}
	}
?>