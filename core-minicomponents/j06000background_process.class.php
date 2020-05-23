<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.21.5
 * @package Jomres
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
     * Called by the webhooks watcher that triggers background tasks for processing by webhook integrations
	 * 
	 */

class j06000background_process
	{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	function __construct()
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}

			
			$payload_source = jomresGetParam($_REQUEST, 'payload_source', '');
			
			logging::log_message("Received deferred message notification " , 'message_handling', 'DEBUG'  );
			
			if ($payload_source != '' ) {
				jr_import('jomres_deferred_tasks');
				$jomres_deferred_tasks = new jomres_deferred_tasks();
				$jomres_deferred_tasks->handle_message( $payload_source );
			}
		}




	function getRetVals()
		{
		return null;
		}
	}