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

class j02110savecustomertypeorder
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
		$defaultProperty = getDefaultProperty();
		$order           = jomresGetParam( $_POST, 'order', array () );
		foreach ( $order as $key => $val )
			{
			$query = "UPDATE  #__jomres_customertypes SET `order`='" . $val . "' WHERE id = '" . (int) $key . "' AND property_uid = '" . (int) $defaultProperty . "'";
			//echo $query."<br>";
			if ( !doInsertSql( $query, jr_gettext( '_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', '_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', false ) ) ) trigger_error( "Unable to customer type order, mysql db failure", E_USER_ERROR );
			}
		$jomres_messaging = jomres_singleton_abstract::getInstance( 'jomres_messages' );
		//$jomres_messaging = new jomres_messages();
		$jomres_messaging->set_message( jr_gettext( '_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', '_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', false ) );

		jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=listCustomerTypes" ), "" );
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