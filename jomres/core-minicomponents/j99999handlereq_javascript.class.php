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

class j99999handlereq_javascript
	{
	function j99999handlereq_javascript( $componentArgs )
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		if (AJAXCALL)
			{
			echo ';jomresJquery(document).ready(function(){jomresJquery(\'.roomdetails_modal\').appendTo("body");});';
			
			}
		}


	function getRetVals()
		{
		return null;
		}
	}

?>