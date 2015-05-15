<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06002fe_stats
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
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if ( !$thisJRUser->userIsManager ) return;
		echo '<script language="javascript" type="text/javascript" src="' . get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/javascript/graphs.js"></script>';
		$defaultProperty = getDefaultProperty();
		$MiniComponents->specificEvent( '16000', 'viewproperty', array ( 'id' => $defaultProperty ) );
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retval;
		}
	}


?>