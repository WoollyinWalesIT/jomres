<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
	
class jrportal_property
	{
	function jrportal_property()
		{
		$this->id					= 0;
		$this->property_id			= 0;
		$this->crate_id				= 0;
		//$this->property_name		= '';
		// $this->property_address		= '';
		// $this->property_managers	= array();

		// $this->propertys_uid		= 0;
		// $this->property_name		= '';
		// $this->property_street		= '';
		// $this->property_town		= '';
		// $this->property_region		= '';
		// $this->property_country		= '';
		// $this->property_postcode	= '';
		// $this->property_tel			= '';
		// $this->property_fax			= '';
		// $this->property_email		= '';
		// $this->property_features	= '';
		// $this->property_mappinglink	= '';
		// $this->property_description	= '';
		// $this->property_checkin_times			= '';
		// $this->property_area_activities			= '';
		// $this->property_driving_directions		= '';
		// $this->property_airports				= '';
		// $this->property_othertransport			= '';
		// $this->property_policies_disclaimers	= '';
		// $this->published						= 0;

		$this->error				= null;
		}
		
	function getProperty()
		{
		if ($this->property_id > 0 )
			{			
			$query = "SELECT 
				`id`,`property_id`,`crate_id`
				FROM #__jomresportal_properties_crates_xref WHERE `property_id`='$this->property_id' LIMIT 1";
				
			$result=doSelectSql($query);
			if ($result && count($result)==1)
				{
				foreach ($result as $r)
					{
					$this->id					= $r->id;
					$this->property_id			= $r->property_id; 
					$this->crate_id				= $r->crate_id; 
					}
				return true;
				}
			else
				{
				if (count($result)==0)
					{
					$this->error = "No Properties were found with that id";
					return false;
					}
				if (count($result)> 1)
					{
					$this->error = "More than one Property was found with that id";
					return false;
					}
				}
			}			
		else
			{
			$this->error = "ID of Property not available";
			return false;
			}
		}	
	
	function commitNewProperty()
		{
		if ($this->id < 1 )
			{
			$query="INSERT INTO #__jomresportal_properties_crates_xref 
				(
				`property_id`,
				`crate_id`
				)
				VALUES
				(
				'$this->property_id',
				'$this->crate_id'
				)";
				//echo $query;exit;
			$result = doInsertSql($query,'');
			if ($result)
				{
				$this->id=$result;
				return true;
				}
			else
				{
				$this->error = "ID of Property could not be found after apparent successful insert";
				return false;
				}
			}
		$this->error = "ID of Property already available. Are you sure you are creating a new Property?";
		return false;
		}

	function commitUpdateProperty()
		{
		if ($this->id > 0 )
			{
			
			$query="UPDATE #__jomresportal_properties_crates_xref SET 
				`property_id` 			= ".(int)$this->property_id.",
				`crate_id` 				= ".(int)$this->crate_id."
				WHERE `id`='$this->id'";
			return doInsertSql($query,'');
			}
			
		$this->error = "ID of Property not available";
		return false;
		}
	function commitUpdatePropertyByPropertyid()
		{
		if ($this->property_id > 0 )
			{
			$query="UPDATE #__jomresportal_properties_crates_xref SET 
				`crate_id` 				= ".(int)$this->crate_id."
				WHERE `property_id` 	= ".(int)$this->property_id." LIMIT 1 ";
			return doInsertSql($query,'');
			}
			
		$this->error = "ID of Property not available";
		return false;
		}

	}

?>