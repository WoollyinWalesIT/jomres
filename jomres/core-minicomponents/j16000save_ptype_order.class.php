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

class j16000save_ptype_order
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
		$order_array = jomresGetParam( $_REQUEST, 'order_array', array () );

		foreach ( $order_array as $ptype_id => $order )
			{
			$query = "UPDATE #__jomres_ptypes SET `order`='" . $order . "' WHERE id='" . (int) $ptype_id . "'";
			doInsertSql( $query, '' );
			}
		jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=listPropertyTypes" ), "" );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>