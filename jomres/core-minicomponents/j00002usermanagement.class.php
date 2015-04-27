<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Manages user access rights
#
 *
 * @package Jomres
#
 */
class j00002usermanagement
	{

	/**
	#
	 * Manages user access rights
	#
	 */
	function j00002usermanagement( $componentArgs = null )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		set_showtime( "jr_user_ready", false );
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if ( $thisJRUser->userIsManager == true ) 
			$thisJRUser->check_currentproperty();
		$thisProperty = trim( jomresGetParam( $_REQUEST, 'thisProperty', 0 ) );
		if ( in_array( $thisProperty, $thisJRUser->authorisedProperties ) && $thisProperty != $thisJRUser->currentproperty )
			{
			if ( $thisJRUser->userIsManager == true && $thisProperty > 0 )
				{
				$thisJRUser->set_currentproperty( $thisProperty );
				}
			}
		if ( $thisJRUser->currentproperty == 0 && $thisJRUser->userIsManager ) 
			$thisJRUser->setToAnyAuthorisedProperty();
		$this->userObject = $thisJRUser;
		set_showtime( "jr_user_ready", true );
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