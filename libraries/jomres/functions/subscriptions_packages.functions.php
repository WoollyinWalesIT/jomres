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

function subscriptions_packages_getallpackages()
	{
	$packages=array();
	$query="SELECT * FROM #__jomresportal_subscriptions_packages";
	$result=doSelectSql($query);

	if (count($result)>0)
		{
		foreach ($result as $r)
			{
			$packages[$r->id]['id']=$r->id;
			$packages[$r->id]['name']=$r->name;
			$packages[$r->id]['description']=$r->description;
			$packages[$r->id]['published']=$r->published;
			$packages[$r->id]['frequency']=$r->frequency;
			$packages[$r->id]['trial_period']=$r->trial_period;
			$packages[$r->id]['trial_amount']=$r->trial_amount;
			$packages[$r->id]['full_amount']=$r->full_amount;
			$packages[$r->id]['rooms_limit']=$r->rooms_limit;
			$packages[$r->id]['property_limit']=$r->property_limit;
			$packages[$r->id]['tax_code_id']=$r->tax_code_id;
			}
		}

	return $packages;
	}
	
function subscriptions_packages_makefrequencyDropdown( $selected='1' )
	{
	$frequencyOptions=array();
	$frequencyDropdown="";
	$frequencies=array("M"=>"M","Q"=>"Q","B"=>"B","A"=>"A");
	if (count($frequencies>0) )
		{
		foreach($frequencies as $k=>$v)
			{
			$frequencyOptions[]=jomresHTML::makeOption( $k, $v );
			}
		$frequencyDropdown= jomresHTML::selectList($frequencyOptions, 'frequency', 'class="inputbox" size="1"', 'value', 'text', $selected);
		}
	return $frequencyDropdown;
	}
	
function subscriptions_packages_maketrialperiodDropdown( $selected='0' )
	{
	$periodOptions=array();
	$periodDropdown="";
	$periods=array("0"=>"","1"=>"1","2"=>"2","3"=>"3");
	if (count($periods>0) )
		{
		foreach($periods as $k=>$v)
			{
			$periodOptions[]=jomresHTML::makeOption( $k, $v );
			}
		$periodDropdown= jomresHTML::selectList($periodOptions, 'trial_period', 'class="inputbox" size="1"', 'value', 'text', $selected);
		}
	return $periodDropdown;
	}
	
function subscriptions_packages_makepropertylimitDropdown( $selected = 0 )
	{
	$property_limitDropdown = jomresHTML::integerSelectList( 1, 1000, 1, 'property_limit', 'size="1" class="inputbox"', $selected );
	return $property_limitDropdown;
	}
	
function subscriptions_packages_makeroomslimitDropdown( $selected = 0 )
	{
	$rooms_limitDropdown = jomresHTML::integerSelectList( 1, 12, 1, 'rooms_limit', 'size="1" class="inputbox"', $selected );
	return $rooms_limitDropdown;
	}
?>