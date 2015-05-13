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

class j16000ajax_list_properties_approve
	{
	function j16000ajax_list_properties_approve()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		$property_uid = (int)jomresGetParam( $_REQUEST, 'property_uid', 0 );
		$approved = (int)jomresGetParam( $_REQUEST, 'approved', 0 );
		$unpublish = "";
		
		if ($approved == 0)
			$unpublish = ", `published` = 0";

		$query  = "UPDATE #__jomres_propertys SET `approved`= ".$approved." ".$unpublish." WHERE `propertys_uid` = " . (int) $property_uid;
		$result = doInsertSql( $query );
		
		$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
		$c->eraseAll();

		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details->gather_data( $property_uid );

		$jomresConfig_mailfrom = get_showtime( 'mailfrom' );
		$jomresConfig_fromname = get_showtime( 'fromname' );

		$link = jomresURL( JOMRES_SITEPAGE_URL_NOSEF . "&task=viewproperty&property_uid=" . $property_uid );

		switch($approved) {
			case 1:
				if ( !jomresMailer( $jomresConfig_mailfrom, $jomresConfig_fromname, $current_property_details->property_email, jr_gettext( '_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT',_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT,false ), jr_gettext( '_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT',_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT,false ) . $link, $mode = 1 ) )
					error_logging( 'Failure in sending approval email to hotel. Target address: ' . $current_property_details->property_email . ' Subject ' . jr_gettext( '_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT',_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT,false ) );
				break;
			case 0:
				if ( !jomresMailer( $jomresConfig_mailfrom, $jomresConfig_fromname, $current_property_details->property_email, jr_gettext( '_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT',_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT,false ), jr_gettext( '_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT',_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT,false ) . $link, $mode = 1 ) )
					error_logging( 'Failure in sending unapproval email to hotel. Target address: ' . $current_property_details->property_email . ' Subject ' . jr_gettext( '_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT',_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT,false ) );
				break;
			default:
				break;
			}
		
		echo "Approval status changed to ".$approved;
		exit;
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}