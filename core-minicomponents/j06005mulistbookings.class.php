<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.18
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06005mulistbookings
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		$mrConfig   = getPropertySpecificSettings();
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		if ( $thisJRUser->userIsRegistered )
			{
			$pageoutput   = array ();
			$output       = array ();
			$rows         = array ();
			$r            = array ();
			$allGuestUids = array ();

			if (!$thisJRUser->is_partner)
				$query       = "SELECT guests_uid FROM #__jomres_guests WHERE mos_userid = '" . (int) $thisJRUser->id . "' ";
			else
				$query       = "SELECT guests_uid FROM #__jomres_guests WHERE partner_id = '" . (int) $thisJRUser->id . "' ";
				
			$guests_uids = doSelectSql( $query );
			// Because a new record is made in the guests table for each new property the guest registers in, we need to find all the guest uids for this user
			if ( count( $guests_uids ) > 0 )
				{
				foreach ( $guests_uids as $g )
					{
					$allGuestUids[ ] = $g->guests_uid;
					}

				$query = "SELECT * FROM #__jomres_contracts WHERE guest_uid IN (".jomres_implode($allGuestUids).") AND cancelled = 0 ORDER BY tag";
				$contracts = doSelectSql( $query );
				}
			else
				$contracts = array();
				
			//if ( count( $contracts ) > 0 ) //we`ll just display an empty table if there are no bookings.
				//{
				$output[ 'HARRIVAL' ]   = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', $editable = false, $isLink = false );
				$output[ 'HDEPARTURE' ] = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', $editable = false, $isLink = false );
				$output[ 'HTOTAL' ]     = jr_gettext( '_JOMRES_AJAXFORM_BILLING_TOTAL', '_JOMRES_AJAXFORM_BILLING_TOTAL', $editable = false, $isLink = false );
				$output[ 'HEXTRAS' ]    = jr_gettext( '_JOMRES_AJAXFORM_BILLING_EXTRAS', '_JOMRES_AJAXFORM_BILLING_EXTRAS', $editable = false, $isLink = false );
				$output[ 'HPNAME' ]     = jr_gettext( '_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', '_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', $editable = false, $isLink = false );

				$output[ 'HMOREINFO' ] = jr_gettext( '_JOMRES_COM_A_CLICKFORMOREINFORMATION', '_JOMRES_COM_A_CLICKFORMOREINFORMATION', $editable = false, $isLink = false );
				$output[ 'TITLE' ]     = jr_gettext( '_JOMCOMP_MYUSER_MYBOOKINGS', '_JOMCOMP_MYUSER_MYBOOKINGS', $editable = false, $isLink = false );
				
				if (count($contracts)>0)
					{
					$basic_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
					$jomres_media_centre_images = jomres_singleton_abstract::getInstance( 'jomres_media_centre_images' );
					
					$counter = 0;
					foreach ( $contracts as $c )
						{
						$jomres_media_centre_images->get_images($c->property_uid, array('property'));
	
						$basic_property_details->gather_data( $c->property_uid );
	
						$r[ 'PROPERTYNAME' ] = getPropertyName( $c->property_uid );
	
						$r[ 'ARRIVAL' ]             = outputDate( $c->arrival );
						$r[ 'DEPARTURE' ]           = outputDate( $c->departure );
						$r[ 'lastchanged' ]         = $c->timestamp;
						$r[ 'EXTRASVALUE' ]         = output_price( $c->extrasvalue );
						$r[ 'CONTRACT_TOTAL' ]      = output_price( $c->contract_total );
						$r[ 'IMAGE' ]               = $jomres_media_centre_images->images ['property'][0][0]['small'];
						$r[ 'VIEWLINK' ]            = JOMRES_SITEPAGE_URL . "&task=muviewbooking&contract_uid=" . $c->contract_uid;
						$r[ 'VIEWLINK_TEXT' ]       = jr_gettext( '_JOMCOMP_MYUSER_VIEWBOOKING', '_JOMCOMP_MYUSER_VIEWBOOKING', $editable = false, $isLink = true );
						$r[ 'PROPERTYDETAILSLINK' ] = JOMRES_SITEPAGE_URL . '&task=viewproperty&property_uid=' . $c->property_uid;
						$rows[ ]                    = $r;
						}
					}

				$pageoutput[ ] = $output;
				$tmpl          = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$tmpl->addRows( 'rows', $rows );
				$tmpl->readTemplatesFromInput( 'list_bookings.html' );
				$tmpl->displayParsedTemplate();
				}
			//else
				//{
				//echo jr_gettext( '_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', _JOMCOMP_MYUSER_VIEWBOOKINGS_NONE, false, false );
				//}
			//}
		}


	function touch_template_language()
		{
		$output = array ();

		$output[ 'HARRIVAL' ]   = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL' );
		$output[ 'HDEPARTURE' ] = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE' );
		$output[ 'HTOTAL' ]     = jr_gettext( '_JOMRES_AJAXFORM_BILLING_TOTAL', '_JOMRES_AJAXFORM_BILLING_TOTAL' );
		$output[ 'HEXTRAS' ]    = jr_gettext( '_JOMRES_AJAXFORM_BILLING_EXTRAS', '_JOMRES_AJAXFORM_BILLING_EXTRAS' );
		$output[ 'HPNAME' ]     = jr_gettext( '_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', '_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME' );
		$output[ 'HMOREINFO' ]  = jr_gettext( '_JOMRES_COM_A_CLICKFORMOREINFORMATION', '_JOMRES_COM_A_CLICKFORMOREINFORMATION' );
		$output[ 'TITLE' ]      = jr_gettext( '_JOMCOMP_MYUSER_MYBOOKINGS', '_JOMCOMP_MYUSER_MYBOOKINGS' );

		foreach ( $output as $o )
			{
			echo $o;
			echo "<br/>";
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>