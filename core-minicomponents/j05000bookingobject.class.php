<?php
/**
#
 * Inherits from dobooking.class.
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */
 
 // ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################


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
		global $MiniComponents;
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
class booking extends jomres_booking
	{
	}
?>