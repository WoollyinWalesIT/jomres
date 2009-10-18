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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class jrportal_crate
	{
	function jrportal_crate()
		{
		$this->id					= 0;
		$this->title				= '';
		$this->type					= 0;
		$this->value				= 0.00;
		$this->currencycode			= 'GBP';
		$this->created				= "0000-00-00 00:00:00";
		$this->archived				= 0;
		$this->archived_date		= "0000-00-00 00:00:00";
		$this->error				= null;
		}

	function getCrate()
		{
		if ($this->id > 0 )
			{
			$query = "SELECT
				`id`,`title`,`type`,`value`,`currencycode`,
				`created`,`archived`,`archived_date`
				FROM #__jomresportal_c_rates WHERE `id`='$this->id' LIMIT 1";

			$result=doSelectSql($query);
			//var_dump($result);exit;
			if ($result && count($result)==1)
				{
				foreach ($result as $r)
					{
					$this->id					= $r->id;
					$this->title				= $r->title;
					$this->type					= $r->type;
					$this->value				= $r->value;
					$this->currencycode			= $r->currencycode;
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
					$this->error = "No Commission rates were found with that id";
					return false;
					}
				if (count($result)> 1)
					{
					$this->error = "More than one Commission rate was found with that id";
					return false;
					}
				}
			}
		else
			{
			$this->error = "ID of Commission rate not available";
			return false;
			}

		}

	function commitNewCrate()
		{
		if ($this->id < 1 )
			{
			$query="INSERT INTO #__jomresportal_c_rates
				(
				`title`,
				`type`,
				`value`,
				`currencycode`,
				`created`,
				`archived`,
				`archived_date`
				)
				VALUES
				(
				'$this->title',
				'$this->type',
				'$this->value',
				'$this->currencycode',
				'".date("Y-m-d H-i-s")."',
				'0',
				'$this->archived_date'
				)";
			$result = doInsertSql($query,'');
			if ($result)
				{
				$this->id=$result;
				return true;
				}
			else
				{
				$this->error = "ID of Commission rate could not be found after apparent successful insert";
				return false;
				}
			}
		$this->error = "ID of Commission rate already available. Are you sure you are creating a new Commission rate?";
		return false;
		}

	function commitUpdateCrate()
		{
		if ($this->id > 0 )
			{
			$query="UPDATE #__jomresportal_c_rates SET
				`title` 			= '$this->title',
				`type` 				= '$this->type',
				`value` 			= '$this->value',
				`currencycode` 		= '$this->currencycode',
				`created` 			= '$this->created',
				`archived` 			= '$this->archived',
				`archived_date` 	= '$this->archived_date'
				WHERE `id`='$this->id'";
			return doInsertSql($query,'');
			}
		$this->error = "ID of Commission rate not available";
		return false;
		}

	function commitArchiveCrate()
		{
		if ($this->id > 0 )
			{
			$this->archived_date=date("Y-m-d H-i-s");
			$this->archived=1;
			return commitUpdateCrate();
			}
		$this->error = "ID of Commission rate not available";
		return false;
		}

	function commitUnArchiveCrate()
		{
		if ($this->id > 0 )
			{
			$this->archived_date=date("Y-m-d H-i-s");
			$this->archived=0;
			return commitUpdateCrate();
			}
		$this->error = "ID of Commission rate not available";
		return false;
		}
	}

?>