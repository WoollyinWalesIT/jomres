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

class j00005x_create_misc_common_strings
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		$current_common_strings = get_showtime( 'common_template_strings' );

		$current_common_strings[ 'COMMON_NEXT' ]   = jr_gettext( 'DATATABLES_SNEXT', '', false );
		$current_common_strings[ 'COMMON_PREV' ]   = jr_gettext( 'DATATABLES_SPREVIOUS', '', false );
		$current_common_strings[ 'COMMON_FIRST' ]   = jr_gettext( 'DATATABLES_SFIRST', '', false );
		$current_common_strings[ 'COMMON_LAST' ]   = jr_gettext( 'DATATABLES_SLAST', '', false );
		$current_common_strings[ 'COMMON_CANCEL' ] = jr_gettext( 'COMMON_CANCEL', '', false );
		$current_common_strings[ 'COMMON_SUBMIT' ] = jr_gettext( 'COMMON_SUBMIT', '', false );
		$current_common_strings[ 'COMMON_SAVE' ]   = jr_gettext( 'COMMON_SAVE', '', false );
		$current_common_strings[ 'COMMON_DELETE' ] = jr_gettext( 'COMMON_DELETE', '', false );
		$current_common_strings[ 'COMMON_RETURN' ] = jr_gettext( 'COMMON_RETURN', '', false );
		$current_common_strings[ 'COMMON_CLOSE' ]  = jr_gettext( 'COMMON_CLOSE', '', false );
		$current_common_strings[ 'COMMON_BACK' ]   = jr_gettext( 'COMMON_BACK', '', false );
		$current_common_strings[ 'COMMON_HOME' ]   = jr_gettext( 'COMMON_HOME', '', false );
		$current_common_strings[ 'COMMON_NEW' ]    = jr_gettext( 'COMMON_NEW', '', false );
		$current_common_strings[ 'COMMON_SEND' ]   = jr_gettext( 'COMMON_SEND', '', false );
		$current_common_strings[ 'COMMON_ACTION' ] = jr_gettext( 'COMMON_ACTION', '', false );
		$current_common_strings[ 'COMMON_VIEW' ]   = jr_gettext( 'COMMON_VIEW', '', false );
		$current_common_strings[ 'COMMON_PRINT' ]  = jr_gettext( 'COMMON_PRINT', '', false );
		$current_common_strings[ 'COMMON_EDIT' ] = jr_gettext( 'COMMON_EDIT', '', false );
		$current_common_strings[ 'COMMON_COPY' ] = jr_gettext( 'COMMON_COPY', '', false );
		$current_common_strings[ 'COMMON_DOWNLOAD' ] = jr_gettext( 'COMMON_DOWNLOAD', '', false );
	
		$current_common_strings[ 'COMMON_PLACEHOLDER_PROPERTYNAME']	= jr_gettext( 'COMMON_PLACEHOLDER_PROPERTYNAME', '', false );
		$current_common_strings[ 'COMMON_PLACEHOLDER_FIRSTNAME' ]		= jr_gettext( 'COMMON_PLACEHOLDER_FIRSTNAME', '', false );
		$current_common_strings[ 'COMMON_PLACEHOLDER_SURNAME' ]			= jr_gettext( 'COMMON_PLACEHOLDER_SURNAME', '', false );
		$current_common_strings[ 'COMMON_PLACEHOLDER_HOUSENUMBER' ]		= jr_gettext( 'COMMON_PLACEHOLDER_HOUSENUMBER', '', false );
		$current_common_strings[ 'COMMON_PLACEHOLDER_STREET' ]			= jr_gettext( 'COMMON_PLACEHOLDER_STREET', '', false );
		$current_common_strings[ 'COMMON_PLACEHOLDER_TOWN' ]			= jr_gettext( 'COMMON_PLACEHOLDER_TOWN', '', false );
		$current_common_strings[ 'COMMON_PLACEHOLDER_LANDLINE' ]		= jr_gettext( 'COMMON_PLACEHOLDER_LANDLINE', '', false );
		$current_common_strings[ 'COMMON_PLACEHOLDER_MOBILE' ]			= jr_gettext( 'COMMON_PLACEHOLDER_MOBILE', '', false );
		$current_common_strings[ 'COMMON_PLACEHOLDER_EMAIL' ]			= jr_gettext( 'COMMON_PLACEHOLDER_EMAIL', '', false );
		$current_common_strings[ 'COMMON_PLACEHOLDER_POSTCODE' ]		= jr_gettext( 'COMMON_PLACEHOLDER_POSTCODE', '', false );
		
		set_showtime( 'common_template_strings', $current_common_strings );
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