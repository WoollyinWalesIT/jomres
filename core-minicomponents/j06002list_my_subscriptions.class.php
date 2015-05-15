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

class j06002list_my_subscriptions
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
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();

		$task = get_showtime( 'task' );
		if ( !$thisJRUser->superPropertyManager && $jrConfig[ 'useSubscriptions' ] == "1" )
			{
			if ( $thisJRUser->accesslevel == 2 )
				{
				$users_subscriptions = subscribers_getCurrentSubscriptionsForJosId( $jrConfig->id );

				}
			else
			return;
			}
		else
		return;

		if ( count( $users_subscriptions ) == 0 ) return;

		$output     = array ();
		$pageoutput = array ();
		$rows       = array ();

		$currfmt = jomres_singleton_abstract::getInstance( 'jomres_currency_format', 2 );

		$output[ 'PAGETITLE' ]      = jr_gettext( '_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS', _JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS, false );
		$output[ 'HNAME' ]          = jr_gettext( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', _JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME, false );
		$output[ 'HDESCRIPTION' ]   = jr_gettext( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', _JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION, false );
		$output[ 'HFREQUENCY' ]     = jr_gettext( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY', _JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY, false );
		$output[ 'HTRIALPERIOD' ]   = jr_gettext( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD', _JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD, false );
		$output[ 'HTRIALAMOUNT' ]   = jr_gettext( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT', _JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT, false );
		$output[ 'HFULLAMOUNT' ]    = jr_gettext( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', _JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT, false );
		$output[ 'HPROPERTYLIMIT' ] = jr_gettext( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', _JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT, false );
		$output[ 'HSTATUS' ]        = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', _JOMRES_COM_MR_VIEWBOOKINGS_STATUS, false );
		$output[ 'STATUSEXPL' ]     = jr_gettext( '_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL', _JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL, false );

		foreach ( $users_subscriptions as $users_subscription )
			{
			$r                    = array ();
			$r[ 'NAME' ]          = $users_subscription[ 'name' ];
			$r[ 'DESCRIPTION' ]   = $users_subscription[ 'description' ];
			$r[ 'FREQUENCY' ]     = $users_subscription[ 'frequency' ];
			$r[ 'TRIALPERIOD' ]   = $users_subscription[ 'trial_period' ];
			$r[ 'TRIALAMOUNT' ]   = $jrConfig[ 'globalCurrency' ] . $currfmt->get_formatted( $users_subscription[ 'trial_amount' ] );
			$r[ 'FULLAMOUNT' ]    = $jrConfig[ 'globalCurrency' ] . $currfmt->get_formatted( $users_subscription[ 'full_amount' ] );
			$r[ 'STATUS' ]        = $users_subscription[ 'status' ] . "  ";
			$r[ 'PROPERTYLIMIT' ] = $users_subscription[ 'property_limit' ];
			$rows[ ]              = $r;
			}

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'frontend_list_my_subscriptions.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->displayParsedTemplate();
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}