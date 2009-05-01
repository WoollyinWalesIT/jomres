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

class jrportal_booking
	{
	function jrportal_booking()
		{
		$this->id					= 0;
		$this->property_uid			= 0;
		$this->guest_id				= 0;
		$this->affiliate_id			= '';
		$this->invoice_id			= 0;
		$this->booking_total		= 0.00;
		$this->contract_id			= 0;
		$this->tag					= '';
		$this->currency_code		= '';
		$this->created				= "0000-00-00 00:00:00";
		$this->archived				= 0;
		$this->archived_date		= "0000-00-00 00:00:00";
		$this->error				= null;
		}

	function getBooking()
		{
		if ($this->id > 0 )
			{
			$query = "SELECT
				id,property_uid,guest_id,affiliate_id,invoice_id,
				booking_total,contract_id,tag,currency_code,created,archived,archived_date
				FROM #__jomresportal_bookings WHERE `id`='$this->id' LIMIT 1";
			$result=doSelectSql($query);
			if ($result && count($result)==1)
				{
				foreach ($result as $r)
					{
					$this->id					= $r->id;
					$this->property_uid			= $r->property_uid;
					$this->guest_id				= $r->guest_id;
					$this->affiliate_id			= $r->affiliate_id;
					$this->invoice_id			= $r->invoice_id;
					$this->booking_total		= $r->booking_total;
					$this->contract_id			= $r->contract_id;
					$this->tag					= $r->tag;
					$this->currency_code		= $r->currency_code;
					$this->created				= $r->created;
					$this->archived				= $r->archived;
					$this->archived_date		= $r->archived_date;
					}
				return true;
				}
			else
				{
				if (count($result)==0)
					{
					$this->error = "No bookings were found with that id";
					jrportalquery_log("Get booking failed ".$this->error);
					return false;
					}
				if (count($result)> 1)
					{
					$this->error = "More than one booking was found with that id";
					jrportalquery_log("Get booking failed ".$this->error);
					return false;
					}
				}
			}
		else
			{
			$this->error = "ID of booking not available";
			jrportalquery_log("Get booking failed ".$this->error);
			return false;
			}

		}

	function commitNewBooking(&$tr)
		{
		if ($this->id < 1 )
			{
			$query="INSERT INTO #__jomresportal_bookings
				(
				`property_uid`,
				`guest_id`,
				`affiliate_id`,
				`invoice_id`,
				`booking_total`,
				`contract_id`,
				`tag`,
				`currency_code`,
				`created`,
				`archived`,
				`archived_date`
				)
				VALUES
				(
				'$this->property_uid',
				'$this->guest_id',
				'$this->affiliate_id',
				'$this->invoice_id',
				'$this->booking_total',
				'$this->contract_id',
				'$this->tag',
				'$this->currency_code',
				'".date("Y-m-d H-i-s")."',
				'0',
				'$this->archived_date'
				)";
			$tr->insertQuery($query);

			if ($tr->success)
				{
				jrportalquery_log($query);
				$this->id=$tr->insertedId;
				return true;
				}
			else
				{
				$this->error = "ID of booking could not be found after apparent successful insert";
				jrportalquery_log("Portal function booking insert failed ".$this->error);
				return false;
				}
			}
		$this->error = "ID of booking already available. Are you sure you are creating a new booking?";
		jrportalquery_log("Portal function booking insert failed ".$this->error);
		return false;
		}

	function commitUpdateBooking(&$tr)
		{
		if ($this->id > 0 )
			{
			$query="UPDATE #__jomresportal_bookings SET
				`property_uid` 		= '$this->property_uid',
				`guest_id` 			= '$this->guest_id',
				`affiliate_id` 		= '$this->affiliate_id',
				`invoice_id` 		= '$this->invoice_id',
				`booking_total` 	= '$this->booking_total',
				`contract_id` 		= '$this->contract_id',
				`tag` 				= '$this->tag',
				`currency_code` 	= '$this->currency_code',
				`created` 			= '$this->created',
				`archived` 			= '$this->archived',
				`archived_date` 	= '$this->archived_date'
				WHERE `id`='$this->id'";
			return $tr->insertQuery($query);
			}
		$this->error = "ID of booking not available";
		jrportalquery_log("Update booking failed ".$this->error);
		return false;
		}

	function commitArchiveBooking(&$tr)
		{
		if ($this->id > 0 )
			{
			$this->archived_date=date("Y-m-d H-i-s");
			$this->archived=1;
			return commitUpdateBooking(&$tr);
			}
		$this->error = "ID of booking not available";
		jrportalquery_log("Archive booking failed ".$this->error);
		return false;
		}

	function commitUnArchiveBooking(&$tr)
		{
		if ($this->id > 0 )
			{
			$this->archived_date=date("Y-m-d H-i-s");
			$this->archived=0;
			return commitUpdateBooking(&$tr);
			}
		$this->error = "ID of booking not available";
		jrportalquery_log("Unarchive booking failed ".$this->error);
		return false;
		}
	}

?>