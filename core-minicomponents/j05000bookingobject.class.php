<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


 // ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

jr_import('dobooking');

/**
#
@see jomres_booking
#
* @package Jomres
#
 */
class j05000bookingobject {
	/**
	#
	 * Constructor: Creates a new instance of the booking engine object and returns it
	#
	 */
	function j05000bookingobject($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$bkg=new booking();
		$this->bookingObject=$bkg;
		$bk=$this->bookingObject;
		if (strlen($bk->error_code)>0)
			$this->bookingObject=null;
		else
			unset($bk);
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->bookingObject;
		}
	}

/**
#
 * Inherits from jomres_booking.  Is the class tht's called by handlereq.php via j05000bookingobject
 #
  * This is the main controller for the booking engine. Use this object to override the jomres_booking class methods to customise how the bookings process is managed
 #
* @package Jomres
#
 */
class booking extends dobooking
	{
	}
?>