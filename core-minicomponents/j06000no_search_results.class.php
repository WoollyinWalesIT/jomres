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

/**
#
 * Lists the properties, according to property uids passed from a search function
#
 *
 * @package Jomres
#
 */
class j06000no_search_results
	{
	/**
	#
	 * Constructor: Executes the sql query to find property details of those property uids passed by a search, then displays those details in the list_propertys patTemplate file
	#
	 */
	function j06000no_search_results()
		{
		$pageoutput[ ] = array ( "MESSAGE" => jr_gettext( '_JOMRES_FRONT_NORESULTS', _JOMRES_FRONT_NORESULTS, $editable = true, $islink = false ) );
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'no_search_results.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$this->ret_vals = $tmpl->getParsedTemplate();
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
		return $this->ret_vals;
		}
	}
