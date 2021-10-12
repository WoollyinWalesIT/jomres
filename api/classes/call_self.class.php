<?php
/**
 *
 *  @package Jomres\Core\REST_API
 *
 * Allows REST API features to call the same server to facillitate reuse of existing REST API features
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.25.0
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 */

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
*
* Call a local REST API feature.
 *
 * Originally I tried to do this by setting the token to the originating message's token but problems arose with mis-matches between the property manager and the system token so instead removed the use of the "call" class and instead switched to using jomres_call_api because that class already handles 1. Setting up the "system" user and 2. Getting a token for that user and 3 now there's just one class that calls self instead of two
 * Previous users of this call_self class expect json encoded data to be returned therefore to maintain parity with existing functionality the response will be returned json encoded.
*/
class call_self
{
	/**
	*
	* Constructor.
	*
	*/
    public function __construct()
    {
    	if ( defined('JOMRES_API_CMS_ROOT') ) {
			require_once(JOMRES_API_JOMRES_ROOT.JRDS."framework.php");
		}

		jr_import('jomres_call_api');
		$this->jomres_call_api = new jomres_call_api('system');


    }

	/**
	*
	* Uses the Call class to call the local server
	*
	*/
    public function call($elements = array())
    {
        if (empty($elements)) {
            throw new Exception('Error, no request elements set ');
        }

        if (!isset($elements['headers'])) {
			$elements['headers'] = array();
		}

		try {
			$response = $this->jomres_call_api->send_request( $elements['method']  ,  $elements['request'] , $elements['data'] , $elements['headers']);
		}
		catch (Exception $e) {
			echo $e->getMessage();
		}

        return json_encode($response);
    }
}
