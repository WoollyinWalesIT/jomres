<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Stores and retrieves temporary booking information in session variables.
 #
* @package Jomres
* @since 2.6.1.1
#
*/
class jomres_temp_booking_handler
	{
	/**
	#
	* Constructor. Sets the default variables
	#
	*/
	function jomres_temp_booking_handler()
		{
		if (defined('JOMRES_SESSONSTARTED'))
			return;
		define('JOMRES_SESSONSTARTED',1);

		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$this->task=get_showtime('task');
		$this->jomressession=get_showtime('jomressession');
		
		$this->timeout = (int)$jrConfig['lifetime'];

		$this->session_directory = JOMRESPATH_BASE."/sessions/";
		if (!is_dir($this->session_directory) )
			{
			if (!@mkdir($this->session_directory)) 
				{
				echo "Error, unable to make folder ".$this->session_directory." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server";
				exit;
				}
			}

		if (!is_writable($this->session_directory) )
			{
			echo "Error, ".$this->session_directory." is not writable therefore cannot store booking session data. Please ensure that it's writable by the web server";
			exit;
			}
			
		$this->tmpbooking=array(
			"requestedRoom"=>"",
			"rate_pernight"=>"",
			"variancetypes"=>"",
			"varianceuids"=>"",
			"varianceqty"=>"",
			"variancevals"=>"",
			"lastminute_id"=>"",
			"agent_booking"=>"",
			"arrivalDate"=>"",
			"departureDate"=>"",
			"stayDays"=>"",
			"dateRangeString"=>"",
			"guests_uid"=>"",
			"property_uid"=>"",
			"rates_uid"=>"",
			"tag"=>"",
			"resource"=>"",
			"single_person_suppliment"=>"",
			"deposit_required"=>"",
			"contract_total"=>"",
			"smoking"=>"",
			"extrasvalue"=>"",
			"extrasvalues_items"=>array(),
			"extras"=>"",
			"extrasquantities"=>array(),
			"third_party_extras"=>array(),
			"third_party_extras_private_data"=>array(),
			"room_allocations"=>array(),
			"room_allocations_note"=>"",
			"total_discount"=>"",
			"booking_discounted"=>false,
			"depositpaidsuccessfully"=>false,
			"tax"=>"",
			"booker_class"=>"",
			"ok_to_book"=>"",
			"beds_available"=>"",
			"referrer"=>"",
			"error_log"=>"",
			"total_in_party"=>"",
			"room_total"=>"",
			"lang"=>"",
			"timestamp"=>"",
			"wisepricediscount"=>"",
			"lastminutediscount"=>"",
			"confirmationSeen"=>false,
			"mininterval"=>"",
			"discounts"=>array(),
			"coupon_id"=>"",
			"coupon_code"=>"",
			"coupon_details"=>array(),
			"coupon_discount_value"=>"",
			"cfg_showExtras"=>false,
			"booking_notes"=>array(),
			"additional_line_items"=>array(),
			"booking_number"=>0
			);
			
		$this->tmpguest = array(
			"guests_uid"=>"",
			"mos_userid"=>"",
			"existing_id"=>"",
			"firstname"=>"",
			"surname"=>"",
			"house"=>"",
			"street"=>"",
			"town"=>"",
			"region"=>"",
			"country"=>"",
			"postcode"=>"",
			"tel_landline"=>"",
			"tel_mobile"=>"",
			"tel_fax"=>"",
			"ccard_no"=>"",
			"ccard_issued"=>"",
			"ccard_expiry"=>"",
			"ccard_iss_no"=>"",
			"ccard_name"=>"",
			"ccv"=>"",
			"type"=>"",
			"property_uid"=>"",
			"email"=>"",
			"discount"=>"0",
			"tag"=>"",
			"timestamp"=>""
			);
			
		$this->tmpsearch_data = array(
			"jomsearch_availability"=>"",
			"jomsearch_availability_departure"=>""
			);
			
		$this->tmplang = array(
			"jomreslang" => get_showtime('lang')
		);
		$this->user_settings = array(
			"editing_on" => false,
			"property_management_view" => false
		);

		$this->customFieldValues = array();
		}
	
	function initCustomFields($allCustomFields)
		{
		$data = array();
		foreach ($allCustomFields as $f)
			{
			$uid = $f['uid'];
			$newBookingfieldName = $f['fieldname']."_".$uid;
			if ( !isset($this->tmpbooking[$newBookingfieldName]) )
				$this->addNewBookingField($newBookingfieldName);
			}
		}
		
	function saveCustomFields($allCustomFields)
		{
		$data = array();
		foreach ($allCustomFields as $f)
			{
			$uid = $f['uid'];
			$newBookingfieldName = $f['fieldname']."_".$uid;
			$data = jomresGetParam( $_POST, $f['fieldname']."_".$uid, '' );
			if ( !isset($this->tmpbooking[$newBookingfieldName]) )
				$this->addNewBookingField($newBookingfieldName);
			$this->updateBookingField($newBookingfieldName,$data);
			}
		}

	function initBookingSession($jomressession)
		{
		if (strlen($jomressession)>0)
			$this->part = $jomressession;
		else
			{
			$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
			$jrConfig=$siteConfig->get();
			 $expire = time()+$jrConfig['lifetime'];
			if (!isset($_COOKIE['jomressession']) || is_null($_COOKIE['jomressession']))
				{
				$this->part = generateJomresRandomString();
				$result=setcookie('jomressession', $this->part, $expire,"/");
				}
			else
				{
				$this->part = $_COOKIE['jomressession'];
				}
			}

		$this->jomressession=$this->part;
		$secret=get_showtime('secret');
		$hash = sha1($secret.$this->part);
		$this->sessionfile=$this->session_directory.$hash.".txt";
		
		jr_import('jomres_custom_field_handler');
		$custom_fields = new jomres_custom_field_handler();
		$allCustomFields = $custom_fields->getAllCustomFields();
		$this->initCustomFields($allCustomFields);
		
		$this->session_jomres_start();
		}


	function session_jomres_start()
		{
		
		if (file_exists($this->sessionfile) )
			{
			$fp=fopen($this->sessionfile,'r');
			$data = fread($fp, filesize($this->sessionfile));
			fclose($fp);
			$dataArrays=unserialize($data);
			$this->tmpbooking=$dataArrays['tmpbooking'];
			$this->tmpguest=$dataArrays['tmpguest'];
			$this->tmpsearch_data=$dataArrays['tmpsearch_data'];
			$this->tmplang=$dataArrays['tmplang'];
			$this->user_settings=$dataArrays['user_settings'];
			
			$data=array('tmpbooking'=>$this->tmpbooking,'tmpguest'=>$this->tmpguest,'tmpsearch_data'=>$this->tmpsearch_data,'tmplang'=>$this->tmplang,'user_settings'=>$this->user_settings);
			$fp=fopen($this->sessionfile,'w+');
			if (!fwrite($fp, serialize($data)) )
				error_log(" Error writing to session file ");
			fclose($fp);
			}
		else // session file doesn't exist, let's create it
			{
			$data=array('tmpbooking'=>$this->tmpbooking,'tmpguest'=>$this->tmpguest,'tmpsearch_data'=>$this->tmpsearch_data,'tmplang'=>$this->tmplang,'user_settings'=>$this->user_settings);
			$fp=fopen($this->sessionfile,'w+');
			if (!fwrite($fp, serialize($data)) )
				error_log(" Error writing to session file ");
			fclose($fp);
			}
		$this->_remove_old_jomres_sessions();
		}

	function close_jomres_session()
		{
		$data=array('IP'=>$_SERVER,'tmpbooking'=>$this->tmpbooking,'tmpguest'=>$this->tmpguest,'tmpsearch_data'=>$this->tmpsearch_data,'tmplang'=>$this->tmplang,'user_settings'=>$this->user_settings);
		$fp=fopen($this->sessionfile,'w+');
		if (!fwrite($fp, serialize($data)) )
			error_log(" Error writing to session file ");
		//echo "<h1>Saving file ".$this->sessionfile."</h1>";
		fclose($fp);
		}

	function _remove_old_jomres_sessions()
		{
		$d = @dir($this->session_directory);
		$docs = array();
		if($d)
			{
			while (FALSE !== ($entry = $d->read()))
				{
				$filename = $entry;
				if(is_file($this->session_directory.$filename) && substr($entry,0,1) != '.' && strtolower($entry) !== 'cvs')
					{
					$docs[] =$filename;
					}
				}
			$d->close();
			if (count($docs)>0)
				{
				foreach ($docs as $f)
					{
					$last_modified = filemtime  ( $this->session_directory."/".$f);
					$seconds_timediff = time() - $last_modified;
					//echo $seconds_timediff;
					if ($seconds_timediff>$this->timeout)
						unlink  ($this->session_directory."/".$f);
					}
				}
			}
		}

	function getJomressession()
		{
		return $this->jomressession;
		}
	
	function getBookingPropertyId()
		{
		return $this->tmpbooking['property_uid'];
		}
	
	function getBookingData()
		{
		return $this->tmpbooking;
		}
		
	function getGuestData()
		{
		return $this->tmpguest;
		}
		
		
	function saveBookingData()
		{
		$this->close_jomres_session();
		}
		
	function saveGuestData()
		{
		$this->close_jomres_session();
		}
	
	function getBookingFieldVal($field)
		{
		return $this->tmpbooking[$field];
		}
	
	function saveAllData()
		{
		$this->saveBookingData();
		$this->saveGuestData();
		}
	
	function updateBookingField($fieldname,$value)
		{
		if ( !isset($this->tmpbooking[$fieldname]) )
			$this->addNewBookingField($fieldname);
		$this->tmpbooking[$fieldname]=$value;
		}
		
	function updateGuestField($fieldname,$value)
		{
		$this->tmpguest[$fieldname]=$value;
		}
		
	function addNewBookingField($fieldname)
		{
		$this->tmpbooking[$fieldname]="";
		}
		
	function addNewGuestField($fieldname)
		{
		$this->tmpguest[$fieldname]="";
		}
	
	function resetCreditCardDetails()
		{
		$this->tmpguest = array(
			"ccard_no"=>"",
			"ccard_issued"=>"",
			"ccard_expiry"=>"",
			"ccard_iss_no"=>"",
			"ccard_name"=>"",
			"ccv"=>"",
			"type"=>""
			);
		$this->saveGuestData();
		}

	function resetTempGuestData()
		{
		$this->tmpguest = array(
			"guests_uid"=>"",
			"mos_userid"=>"",
			"existing_id"=>"",
			"firstname"=>"",
			"surname"=>"",
			"house"=>"",
			"street"=>"",
			"town"=>"",
			"region"=>"",
			"country"=>"",
			"postcode"=>"",
			"tel_landline"=>"",
			"tel_mobile"=>"",
			"tel_fax"=>"",
			"ccard_no"=>"",
			"ccard_issued"=>"",
			"ccard_expiry"=>"",
			"ccard_iss_no"=>"",
			"ccard_name"=>"",
			"ccv"=>"",
			"type"=>"",
			"property_uid"=>"",
			"email"=>"",
			"discount"=>"0",
			"tag"=>"",
			"timestamp"=>""
			);
		$this->saveGuestData();
		}
		
	function resetTempBookingData()
		{
		$pid=$this->tmpbooking['property_uid'];
		$this->tmpbooking=array(
			"property_uid"=>$pid,
			"requestedRoom"=>"",
			"rate_pernight"=>"",
			"variancetypes"=>"",
			"varianceuids"=>"",
			"varianceqty"=>"",
			"variancevals"=>"",
			"lastminute_id"=>"",
			"agent_booking"=>"",
			"stayDays"=>"",
			"dateRangeString"=>"",
			"guests_uid"=>"",
			"rates_uid"=>"",
			"tag"=>"",
			"resource"=>"",
			"single_person_suppliment"=>"",
			"deposit_required"=>"",
			"contract_total"=>"",
			"smoking"=>"",
			"extrasvalue"=>"",
			"extrasvalues_items"=>array(),
			"extras"=>"",
			"extrasquantities"=>array(),
			"third_party_extras"=>array(),
			"third_party_extras_private_data"=>array(),
			"room_allocations"=>array(),
			"room_allocations_note"=>'',
			"total_discount"=>"",
			"booking_discounted"=>false,
			"depositpaidsuccessfully"=>false,
			"tax"=>"",
			"booker_class"=>"",
			"ok_to_book"=>"",
			"beds_available"=>"",
			"referrer"=>"",
			"error_log"=>"",
			"total_in_party"=>"",
			"room_total"=>"",
			"lang"=>"",
			"timestamp"=>"",
			"wisepricediscount"=>"",
			"lastminutediscount"=>"",
			"confirmationSeen"=>false,
			"mininterval"=>"",
			"discounts"=>array(),
			"coupon_id"=>"",
			"coupon_code"=>"",
			"coupon_details"=>array(),
			"coupon_discount_value"=>"",
			"cfg_showExtras"=>false,
			"booking_notes"=>array(),
			"additional_line_items"=>array(),
			"booking_number"=>0
			);
		$this->saveBookingData();
		}

	}
?>