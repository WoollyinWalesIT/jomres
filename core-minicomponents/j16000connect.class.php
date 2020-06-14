<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.22.0
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j16000connect
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
	 
	public function __construct($componentArgs)
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$local_url = base64_encode(JOMRES_SITEPAGE_URL_ADMIN_AJAX);

		$connection_url = 'https://license-server.jomres.net/shop/connect/?local_url='.$local_url;

		echo '
		<style>
		.wrap-element {
  			position: relative;
  			overflow: hidden;
  			padding-top: 20%;
		}
		
		.wrapped-iframe {
		  position: absolute;
		  top: 0;
		  left: 0;
		  width: 100%;
		  height: 100%;
		  border: 0;
		}

		.center {
     		float: none;
     		margin-left: auto;
     		margin-right: auto;
			}

		</style>
		<script>
		    var interval = window.setInterval(function() {
			try {
				if (connectWindow == null || connectWindow.closed) {
				    populateDiv("connect-wrapper" , "<p alert alert-success>Congratulations, we are connected, you can go now to the Jomres plugin manager and start installing plugins.</p>");
				}
			}
			catch (e) {
			}
		}, 1000);
		</script>
		<div id = "connect-wrapper">
			<div class="wrap-element">
				<iframe class="wrapped-iframe" src="https://license-server.jomres.net/shop/connect/client/connection_info.html" title="Connect to the Jomres platform"> </iframe>
			</div>
			<div class="container">
				<div class="row">
					<div class="center">
						<a onClick=\'connectWindow = window.open("'.$connection_url.'", "Connect", "resizable,scrollbars,status")\'  class="btn btn-large btn-primary">Connect now!</a>
					</div>
				</div>
			</div>
			<div class="wrap-element">
				<iframe class="wrapped-iframe" src="https://license-server.jomres.net/shop/connect/client/details.html" title="More details about the Jomres Connect Program"> </iframe>
			</div>		
		</div>

		
		

			';

	}


	public function getRetVals()
	{
		return null;
	}
}
