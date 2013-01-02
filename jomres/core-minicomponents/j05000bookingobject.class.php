<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2013 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


 // ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
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
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		
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

if (!class_exists('booking'))
	{ 
	class booking extends dobooking 
		{
		/**
		#
		 * Creates the javascript date input and returns it as a value
		#
		 */
		function generateDateInput($fieldName,$dateValue,$myID=FALSE)
			{
			$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
			// We need to give the javascript date function a random name because it will be called by both the component and modules
			$uniqueID="";
			// If this date picker is "arrivalDate" then we need to create a departure date input name too, then set it in showtime. With that we'll be able to tell this set of functionality what the id of the
			// departureDate is so that it can set it's date when this one changes
			if ($fieldName != "departureDate")
				{
				list($usec,$sec)=explode(" ",microtime());
				mt_srand($sec * $usec);
				$possible='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefhijklmnopqrstuvwxyz';
				for ($i=0; $i<10; $i++)
					{
					$key=mt_rand(0, strlen($possible)-1);
					$uniqueID.=$possible[$key];
					}
				set_showtime('departure_date_unique_id',$uniqueID."_XXX") ;
				}
			else
				{
				$uniqueID=get_showtime('departure_date_unique_id');
				}

			if ($dateValue=="")
				$dateValue = date("Y/m/d");
			$dateValue=JSCalmakeInputDates($dateValue,$siteConfig);

			$dateFormat=$this->cfg_cal_input;
			$dateFormat = strtolower(str_replace("%","",$dateFormat)); // For the new jquery calendar, we'll strip out the % symbols. This should mean that we don't need to force upgraders to reset their settings.
			$dateFormat = str_replace("y","yy",$dateFormat);
			$dateFormat = str_replace("m","mm",$dateFormat);
			$dateFormat = str_replace("d","dd",$dateFormat);

			if (!defined('_JOMRES_CALENDAR_RTL'))
				define('_JOMRES_CALENDAR_RTL','false');

			$alt_field_string = "";
			$depature_date_doc_ready = "";
			if ($fieldName=="arrivalDate")
				{
				$alt_field_string = '
					altField: "#'.get_showtime('departure_date_unique_id').'",

					';
				}

			$onchange="";
			if ($fieldName=="arrivalDate")
				{
				if ($this->cfg_fixedPeriodBookings =="1" )
					$onchange.=' getResponse_particulars(\'arrivalDate\',this.value); ';
				else
					$onchange.=' ajaxADate(this.value,\''.$this->cfg_cal_input.'\'); getResponse_particulars(\'arrivalDate\',this.value,\''.$uniqueID.'\'); ';
				}
			else
				$onchange.=' getResponse_particulars(\'departureDate\',this.value); ';

			$size = " size=\"10\" ";
			$input_class="";
			if (using_bootstrap())
				{ 
				$size="";
				$input_class=" input-small ";
				}
		
			$amend_contract =  $tmpBookingHandler->getBookingFieldVal("amend_contract");
			$output .= '<script type="text/javascript">
			jomresJquery(function() {
				jomresJquery("#'.$uniqueID.'").datepicker( {
					dateFormat: "'.$dateFormat.'",';
					if (!$amend_contract)
						$output .='minDate: 0, ';
					
					$output .='maxDate: "+5Y",';

					if ($this->jrConfig['useSSLinBookingform'] == "0")
						$output.='buttonImage: \''.get_showtime('live_site').'/jomres/images/calendar.png\',';
					else
						$output.='buttonImage: \'jomres/images/calendar.png\',';
					$output.='
					autoSize:true,
					buttonImageOnly: true,
					showOn: "both",
					changeMonth: true,
					changeYear: true,';
					if ($fieldName=="arrivalDate" && !using_bootstrap() )
						$output .= 'numberOfMonths: 3,';
					else
						$output .= 'numberOfMonths: 1,';
					$output .= 'showOtherMonths: true,
					selectOtherMonths: true,
					showButtonPanel: true,';
					if ($this->jrConfig['calendarstartofweekday'] == "1")
						$output .= 'firstDay: 0,';
					else
						$output .= 'firstDay: 1,';
					$output .= 'onSelect: function() {
							'.$onchange.'
						}';
					if ($fieldName=="arrivalDate")
						$output .=',beforeShowDay: isAvailable';

					$output .='} );

			});
			</script>
			<input type="text" '.$size.' class="'.$input_class.'" name="'.$fieldName.'" id="'.$uniqueID.'" value="'.$dateValue.'" readonly="readonly" autocomplete="off" />
			';
			return $output;
			}
		}
	}
?>