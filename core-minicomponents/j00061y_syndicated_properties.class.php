<?php
/**
* @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
* @author Aladar Barthi <sales@jomres-extras.com>
* @copyright 2009-2013 Aladar Barthi
**/
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
	
	/**
	 * Core Minicomponent.
	 *
	 * Shows the syndicated properties script output at the bottom of the page.
	 * 
	 */

class j00061y_syndicated_properties {	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	function __construct($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		if (!$thisJRUser->userIsManager && get_showtime('task') != "dobooking" ) {
			$MiniComponents->specificEvent('06000','show_syndicated_properties', array('limit'=>6));
			}
		
		}


	function getRetVals()
		{
		return null;
		}
	}
