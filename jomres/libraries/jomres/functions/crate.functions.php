<?php
/**
#
 * JRPortal core file
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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
				//echo $query;exit;
		$result=doSelectSql($query);
		//var_dump($result);exit;
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

	function batchArchive($idArray,&$tr)
		{
		$g_ids = genericOr($idArray,'id');
		$d=date("Y-m-d H-i-s");
		$query="UPDATE #__jomresportal_c_rates SET `archived`='1',`archived_date`='$d' WHERE ".$g_ids;
		return $tr->insertQuery($query);
		}

	function makeCrateDropdown($id,$idx=null)
		{
		$options = array();
		$crates=$this->crates;
		foreach ($crates as $v)
			{
			$options[] = jomresHTML::makeOption( $v['id'], $v['title'] );
			}
		return jomresHTML::selectList( $options, "crates[$idx]",'class="inputbox" size="1"', 'value', 'text', $id);
		}



	}
?>