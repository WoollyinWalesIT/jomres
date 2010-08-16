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
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jrportal_taxrate
	{
	function jrportal_taxrate()
		{
		$this->id					= 0;
		$this->code					= '';
		$this->description			= '';
		$this->rate					= 0.00;
		$this->error				= null;
		}


	function getTaxRate()
		{
		if ($this->id > 0 )
			{
			$query = "SELECT
				`id`,`code`,`description`,`rate`
				FROM #__jomresportal_taxrates WHERE `id`=".(int)$this->id." LIMIT 1";

			$result=doSelectSql($query);
			if ($result && count($result)==1)
				{
				foreach ($result as $r)
					{
					$this->id					= $r->id;
					$this->code					= $r->code;
					$this->description			= $r->description;
					$this->rate					= $r->rate;
					}
				return true;
				}
			else
				{
				if (count($result)==0)
					{
					error_logging(  "No Tax Rates were found with that id");
					return false;
					}
				if (count($result)> 1)
					{
					error_logging(  "More than one Tax Rate rate was found with that id");
					return false;
					}
				}
			}
		else
			{
			//error_logging(  "ID of Tax Rate rate not available");
			return false;
			}

		}

	function commitTaxRate()
		{
		if ($this->id < 1 )
			{
			$query="INSERT INTO #__jomresportal_taxrates
				(
				`code`,
				`description`,
				`rate`
				)
				VALUES
				(
				'".(string)$this->code."',
				'".(string)$this->description."',
				'".(float)$this->rate."'
				)";
			$result=doInsertSql($query,"");
			if ($result)
				{
				$this->id=$result;
				return true;
				}
			else
				{
				error_logging(  "ID of Tax Rate could not be found after apparent successful insert");
				return false;
				}
			}
		error_logging(  "ID of Tax Rate already available. Are you sure you are creating a new Commission rate?");
		return false;
		}

	function commitUpdateTaxRate()
		{
		if ($this->id > 0 )
			{
			$query="UPDATE #__jomresportal_taxrates SET
				`code` 					= '$this->code',
				`description` 			= '$this->description',
				`rate` 					= '$this->rate'

				WHERE `id`=".(int)$this->id;
			$result=doInsertSql($query,"");
			if ($result)
				return true;
			else
				{
				error_logging(  "ID of Tax Rate could not be found after apparent successful insert");
				return false;
				}
			}
		error_logging(  "ID of Tax Rate not available");
		return false;
		}

	function deleteTaxRate()
		{
		if ($this->id > 0 )
			{
			$query="DELETE FROM #__jomresportal_taxrates WHERE `id` = ".(int)$this->id;
			$result=doInsertSql($query,"");
			if ($result)
				{
				return true;
				}
			else
				{
				error_logging(  "Could not delete tax rate.");
				return false;
				}
			}
		error_logging(  "ID of Tax Rate not available");
		return false;
		}
	}

?>