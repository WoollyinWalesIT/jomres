<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j03150email_admin_newbooking
	{
	function j03150email_admin_newbooking( $componentArgs )
		{

		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false; return;
			}
		
		$default_template = JOMRES_TEMPLATEPATH_BACKEND.JRDS.'email_admin_newbooking.html';
		
		$this->ret_vals = array ( "type" => "email_admin_newbooking", "name" => jr_gettext('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME',_JOMRES_ADMIN_NEWBOOKING_EMAILNAME,false) , "desc" => jr_gettext('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC',_JOMRES_ADMIN_NEWBOOKING_EMAILDESC,false), "default_template" => $default_template );
		
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->ret_vals;
		}
	}
