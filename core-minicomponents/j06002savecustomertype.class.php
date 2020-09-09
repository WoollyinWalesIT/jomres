<?php
/**
* Jomres CMS Agnostic Plugin
* @author Woollyinwales IT <sales@jomres.net>
 * @version Jomres 9.23.5
* @package Jomres
 * @copyright	2005-2020 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j06002savecustomertype {
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		$defaultProperty = (int)getDefaultProperty();
		
		jr_import( 'jrportal_guest_types' );
		$jrportal_guest_types = new jrportal_guest_types();
		
		$jrportal_guest_types->id				= (int)jomresGetParam( $_POST, 'typeid', 0 );
		$jrportal_guest_types->type				= jomresGetParam( $_POST, 'type', "" );
		$jrportal_guest_types->notes			= jomresGetParam( $_POST, 'notes', "" );
		$jrportal_guest_types->maximum			= (int) jomresGetParam( $_POST, 'maximum', 0 );
		$jrportal_guest_types->is_percentage	= (int)jomresGetParam( $_POST, 'is_percentage', 0 );
		$jrportal_guest_types->is_child			= (int)jomresGetParam( $_POST, 'is_child', 0 ) ;
		$jrportal_guest_types->posneg			= (int) jomresGetParam( $_POST, 'posneg', 0 );
		$jrportal_guest_types->variance			= (float)jomresGetParam( $_POST, 'variance', 0.0 );
		$jrportal_guest_types->property_uid		= $defaultProperty;
		
		if ( $jrportal_guest_types->id > 0 )
			$jrportal_guest_types->commit_update_guest_type();
		else
			$jrportal_guest_types->commit_new_guest_type();

		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listcustomertypes"), jr_gettext('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED',false) );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
