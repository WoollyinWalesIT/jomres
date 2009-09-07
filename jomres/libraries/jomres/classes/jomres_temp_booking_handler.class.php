<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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
		global $jomresConfig_lifetime;
		$this->task=get_showtime('task');
		$this->jomressession=get_showtime('jomressession');
		if (defined('_JOMRES_NEWJOOMLA') )
			$this->timeout = $jomresConfig_lifetime*60;
		else
			$this->timeout = $jomresConfig_lifetime;

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
			"total_discount"=>"",
			"booking_discounted"=>false,
			"depositpaidsuccessfully"=>"",
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
			"booking_notes"=>array()
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
			"tag"=>"",
			"timestamp"=>""
			);
			
		$this->tmpsearch_data = array(
			"jomsearch_availability"=>"",
			"jomsearch_availability_departure"=>""
			);
			
		$this->tmplang = array(
			"jomreslang" => null
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
			session_id($jomressession);
		if (!@session_start())
			{
			@ini_set('session.save_handler', 'files');
			session_start();
			}
		$this->jomressession=$jomressession=session_id();
		$this->sessionfile=$this->session_directory.$this->jomressession.".txt";
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
			
			$data=array('tmpbooking'=>$this->tmpbooking,'tmpguest'=>$this->tmpguest,'tmpsearch_data'=>$this->tmpsearch_data,'tmplang'=>$this->tmplang);
			$fp=fopen($this->sessionfile,'w+');
			if (!fwrite($fp, serialize($data)) )
				error_log(" Error writing to session file ");
			fclose($fp);
			}
		else // session file doesn't exist, let's create it
			{
			$data=array('tmpbooking'=>$this->tmpbooking,'tmpguest'=>$this->tmpguest,'tmpsearch_data'=>$this->tmpsearch_data,'tmplang'=>$this->tmplang);
			$fp=fopen($this->sessionfile,'w+');
			if (!fwrite($fp, serialize($data)) )
				error_log(" Error writing to session file ");
			fclose($fp);
			}
		$this->_remove_old_jomres_sessions();
		}

	function close_jomres_session()
		{
		$data=array('tmpbooking'=>$this->tmpbooking,'tmpguest'=>$this->tmpguest,'tmpsearch_data'=>$this->tmpsearch_data,'tmplang'=>$this->tmplang);
		$fp=fopen($this->sessionfile,'w+');
		if (!fwrite($fp, serialize($data)) )
			error_log(" Error writing to session file ");
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
		return session_id();
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
			"arrivalDate"=>"",
			"departureDate"=>"",
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
			"total_discount"=>"",
			"booking_discounted"=>false,
			"depositpaidsuccessfully"=>"",
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
			"booking_notes"=>array()
			);
		$this->saveBookingData();
		}

	}
?>