<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jrportal_crate_functions // Functions supplied as a class so that they can be extended easily without rewriting  the functions
	{
	function jrportal_crate_functions()
		{
		$this->crates=array();
		}

	function getCrateForPropertyuid($property_uid)
		{
		$query = "SELECT crate_id FROM #__jomresportal_properties_crates_xref WHERE property_id = '$property_uid' LIMIT 1";
		$crate_id=doSelectSql($query);

		if (count($crate_id) ==1)
			{
			foreach ($crate_id as $c)
				{
				$this->crates= $this->getCrates("WHERE `id` = '".$c->crate_id."' LIMIT 1");
				return $this->crates[$c->crate_id];
				}

			}
		return array();
		}

	function getAllUnarchivedCrates()
		{
		$this->crates= $this->getCrates("WHERE `archived` = '0' ");
		return $this->crates;
		}

	function getAllArchivedCrates()
		{
		$this->crates= $this->getCrates("WHERE `archived` = '1' ");
		return $this->crates;
		}

	function getAllCrates()
		{
		$this->crates= $this->getCrates("");
		return $this->crates;
		}

	function getCratesByIdArray($idArray)
		{
		$clause = genericOr($idArray,'id');
		$this->crates= $this->getCrates("WHERE ".$clause);
		return $this->crates;
		}

	function getCrates($clause)
		{
		$retResult=array();
		$query = "SELECT `id`,`title`,`type`,`value`,`currencycode`,
				`created`,`archived`,`archived_date`
				FROM #__jomresportal_c_rates ".$clause;
		$result=doSelectSql($query);
		if (count($result)>0)
			{
			foreach ($result as $r)
				{
				$retResult[$r->id]['id']=$r->id ;
				$retResult[$r->id]['title']=$r->title ;
				$retResult[$r->id]['type']=$r->type ;
				$retResult[$r->id]['value']=$r->value ;
				$retResult[$r->id]['currencycode']=$r->currencycode ;
				$retResult[$r->id]['created']=$r->created ;
				$retResult[$r->id]['archived']=$r->archived ;
				$retResult[$r->id]['archived_date']=$r->archived_date ;
				}
			}
		return $retResult;
		}

	function batchArchive($idArray)
		{
		$g_ids = genericOr($idArray,'id');
		$d=date("Y-m-d H-i-s");
		$query="UPDATE #__jomresportal_c_rates SET `archived`='1',`archived_date`='$d' WHERE ".$g_ids;
		return doInsertSql($query,'');
		}

	function makeCrateDropdown($id,$idx=null)
		{
		$options = array();
		$crates=$this->crates;
		foreach ($crates as $v)
			{
			$options[] = jomresHTML::makeOption( $v['id'], $v['title'] );
			}
		return jomresHTML::selectList( $options, "crates[$idx]",' size="1"', 'value', 'text', $id);
		}



	}
?>