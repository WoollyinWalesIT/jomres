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

class jrportal_property_functions // Functions supplied as a class so that they can be extended easily without rewriting  the functions
	{
	function getAllJomresProperties($limit=false,$limitstart=false)
		{
		$retResult=array();
		$caveat="";
		if ($limit && $limitstart)
			{
			$caveat=" LIMIT ".$limitstart.",".$limit;
			}
		$query="SELECT propertys_uid,property_name,property_street,property_town,property_region,property_country,property_postcode,published
		FROM #__jomres_propertys ".$caveat;
		//echo $query;exit;
		$result=doSelectSql($query);
		if (count($result)>0)
			{
			foreach ($result as $r)
				{
				$retResult[$r->propertys_uid]['id']=$r->propertys_uid ;
				$retResult[$r->propertys_uid]['property_name']=stripslashes($r->property_name);
				$retResult[$r->propertys_uid]['property_street']=stripslashes($r->property_street);
				$retResult[$r->propertys_uid]['property_town']=stripslashes($r->property_town);
				$retResult[$r->propertys_uid]['property_region']=stripslashes($r->property_region);
				$retResult[$r->propertys_uid]['property_country']=$r->property_country;
				$retResult[$r->propertys_uid]['property_postcode']=stripslashes($r->property_postcode);
				$retResult[$r->propertys_uid]['published']=$r->published ;
				}
			}
		return $retResult;	
		}

	function getAllPortalProperties()
		{
		$retResult=array();	
		$query="SELECT id,property_id,crate_id	FROM #__jomresportal_properties_crates_xref ";
		$result=doSelectSql($query);
		if (count($result)>0)
			{
			foreach ($result as $r)
				{
				$retResult[$r->property_id]['id']=$r->id ;
				$retResult[$r->property_id]['property_id']=$r->property_id ;
				$retResult[$r->property_id]['crate_id']=$r->crate_id ;
				}
			}
		return $retResult;
		}		
	
	
	
	function getPropertyDetails($idArray)
		{
		$retResult=array();
		$clause = "WHERE ";
		$clause .= genericOr($idArray,'propertys_uid');
		$query="SELECT propertys_uid,property_name,property_street,property_town,property_region,property_country,property_postcode,published,apikey
		FROM #__jomres_propertys ".$clause." LIMIT ".count($idArray);
		$result=doSelectSql($query);
		if (count($result)>0)
			{
			foreach ($result as $r)
				{
				$retResult[$r->propertys_uid]['id']=$r->propertys_uid ;
				$retResult[$r->propertys_uid]['property_name']=$r->property_name ;
				$retResult[$r->propertys_uid]['property_street']=$r->property_street ;
				$retResult[$r->propertys_uid]['property_town']=$r->property_town ;
				$retResult[$r->propertys_uid]['property_region']=$r->property_region ;
				$retResult[$r->propertys_uid]['property_country']=$r->property_country ;
				$retResult[$r->propertys_uid]['property_postcode']=$r->property_postcode ;
				$retResult[$r->propertys_uid]['published']=$r->published ;
				$retResult[$r->propertys_uid]['apikey']=$r->apikey ;
				}
			}
		return $retResult;
		}

	function getNumberOfRoomsInProperty($idArray)
		{
		$retResult=array();
		$clause = "WHERE ".genericOr($idArray,'propertys_uid');
		$query="SELECT room_uid,propertys_uid FROM #__jomres_rooms ".$clause;
		$result=doSelectSql($query);
		if (count($result)>0)
			{
			foreach ($result as $r)
				{
				if (!array_key_exists($r->propertys_uid,$retResult) )
					{
					$retResult[$r->propertys_uid]=1;
					}
				else
					{
					$oldval=$retResult[$r->propertys_uid];
					$retResult[$r->propertys_uid]=$oldval+1;
					}
				}
			}
		return $retResult;
		}
		
	function makePropertyDropdownForManagerId($idArray)
		{
		$options = array();
		$clause = "WHERE ".genericOr($idArray,'manager_id');
		$query="SELECT property_uid FROM #__jomres_managers_propertys_xref  ".$clause;
		$result=doSelectSql($query);
		if (count($result)>0)
			{
			$idArray=array();
			foreach ($result as $r)
				{
				$idArray[]=$r->property_uid;
				}
	
			$propertyDeets=$this->getPropertyDetails($idArray);
			foreach ($propertyDeets as $p)
				{
				$options[] = jomresHTML::makeOption( $p['id'], $p['property_name'] );
				}
			}
		return jomresHTML::selectList( $options, "property_uid",'class="inputbox" size="1"', 'value', 'text', $id);
		}		
	}
?>