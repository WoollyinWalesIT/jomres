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

class j00014last_active
	{
	function j00014last_active()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true; return;
			}
		
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );

		if ($thisJRUser->userIsManager)
			{
			$pageoutput = array ();
			$output     = array ();
				
			$query = "SELECT count(contract_uid) as bookings,property_uid 
				FROM #__jomres_contracts 
				WHERE property_uid IN (".implode( "," , $thisJRUser->authorisedProperties).") 
				AND `timestamp` > '".$thisJRUser->last_active."'  
				GROUP BY `property_uid`";
					
			$booking_count = doSelectSql ($query );
			
			if ( count ( $booking_count ) > 0 )
				{
				$rows=array();
				foreach ( $booking_count as $bookings )
					{
					$r=array();
					
					$pageoutput[0]['SINCE'] = jr_gettext( '_JOMRES_SINCE_LAST_ONLINE_SINCE', _JOMRES_SINCE_LAST_ONLINE_SINCE, false, false );
					if ( $bookings->bookings == 1 )
						{
						$r['PRETEXT'] = jr_gettext( '_JOMRES_SINCE_LAST_ONLINE_PRETEXT_SINGULAR', _JOMRES_SINCE_LAST_ONLINE_PRETEXT_SINGULAR, false, false );
						$r['POSTTEXT'] = jr_gettext( '_JOMRES_SINCE_LAST_ONLINE_POSTTEXT_SINGULAR', _JOMRES_SINCE_LAST_ONLINE_POSTTEXT_SINGULAR, false, false );
						}
					else
						{
						$r['PRETEXT'] = jr_gettext( '_JOMRES_SINCE_LAST_ONLINE_PRETEXT_PLURAL', _JOMRES_SINCE_LAST_ONLINE_PRETEXT_PLURAL, false, false );
						$r['POSTTEXT'] = jr_gettext( '_JOMRES_SINCE_LAST_ONLINE_POSTTEXT_PLURAL', _JOMRES_SINCE_LAST_ONLINE_POSTTEXT_PLURAL, false, false );
						}
					$r['BOOKINGS']				= (int)$bookings->bookings;
					$r['PROPERTYNAME']			= $thisJRUser->authorisedPropertyDetails[$bookings->property_uid]['property_name'];
					$r['LIST_BOOKINGS_LINK']	= jomresURL( JOMRES_SITEPAGE_URL . "&task=list_bookings&thisProperty=".$bookings->property_uid );
					$rows[] = $r;
					}
	
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
				$tmpl->readTemplatesFromInput( 'last_active.html' );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$tmpl->addRows( 'rows', $rows );
				$tmpl->displayParsedTemplate();
				}
				
				
			$last_active = new DateTime($thisJRUser->last_active);
			$since_start = $last_active->diff(new DateTime(date()));
			$minutes = $since_start->days * 24 * 60;
			$minutes += $since_start->h * 60;
			$minutes += $since_start->i;
			
			// We'll let the user see this message for half an hour.
			if ( $minutes > 30 )
				{
				$query = "update `#__jomres_managers` SET `last_active`=now() WHERE `userid` = ".$thisJRUser->userid;
				$result = doInsertSql($query);
				}
			}

		}

	function touch_template_language()
		{
		$output    = array ();
		$output[ ] = jr_gettext( '_PN_NEXT', _PN_NEXT );
		$output[ ] = jr_gettext( '_PN_PREVIOUS', _PN_PREVIOUS );
		$output[ ] = jr_gettext( '_JOMRES_CONVERSION_DISCLAIMER', _JOMRES_CONVERSION_DISCLAIMER );
		$output[ ] = jr_gettext( '_JOMRES_SINCE_LAST_ONLINE_PRETEXT', _JOMRES_SINCE_LAST_ONLINE_PRETEXT );
		$output[ ] = jr_gettext( '_JOMRES_SINCE_LAST_ONLINE_POSTTEXT', _JOMRES_SINCE_LAST_ONLINE_POSTTEXT );
		$output[ ] = jr_gettext( '_JOMRES_SINCE_LAST_ONLINE_MIDTEXT_PLURAL', _JOMRES_SINCE_LAST_ONLINE_MIDTEXT_PLURAL );

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