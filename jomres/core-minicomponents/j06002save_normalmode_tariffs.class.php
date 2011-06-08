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
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j06002save_normalmode_tariffs {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j06002save_normalmode_tariffs($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		if (!$thisJRUser->userIsManager)
			return;
		
		
		$mrConfig=getPropertySpecificSettings();
		//if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty=getDefaultProperty();
		jr_import('jomres_cache');
		$cache = new jomres_cache();
		$cache->trashCacheForProperty($defaultProperty);
		// New Room defaults
		$room_floor ="N/A";
		$room_disabled_access=0;
		$smoking=0;
		// New tariff defaults
		$rate_title="Tariff";
		$rate_description="";
		$validfrom=date("Y/m/d");
		$validto=date("Y/m/d",strtotime("+10 years"));
		$validfrom_ts=str_replace("/","-",$validfrom);
		$validto_ts=str_replace("/","-",$validto);
		$mindays=1;
		$maxdays=1000;
		$minpeople=1;
		$ignore_pppn=0;
		$allow_ph=1;
		$allow_we=1;
		$weekendonly=0;

		if ($mrConfig['singleRoomProperty'] ==  '1') ///////////////////////////////////////////////////////////////////////////////// SRP
			{
			$roomrateperday	= floatval(jomresGetParam( $_POST, 'roomrateperday', "" ));
			$roomtype		= intval(jomresGetParam( $_POST, 'roomtype', "" ));
			$max_people		= intval(jomresGetParam( $_POST, 'max_people',  "" ));
			//var_dump($_POST);exit;
			$query = "SELECT room_uid FROM #__jomres_rooms WHERE propertys_uid = '".(int)$defaultProperty."'";
			$roomsList =doSelectSql($query);
			if (count($roomsList)==0)
				{
				$query="INSERT INTO #__jomres_rooms (
					`room_classes_uid`,
					`propertys_uid`,
					`room_features_uid`,
					`room_name`,
					`room_number`,
					`room_floor`,
					`room_disabled_access`,
					`max_people`,
					`smoking`
					)VALUES (
					'".(int)$roomtype."',
					 ".(int)$defaultProperty.",
					'',
					'',
					'1',
					'$room_floor',
					'".(int)$room_disabled_access."',
					'".(int)$max_people."',
					'".(int)$smoking."'
					)";
					$result=doInsertSql($query,_JOMRES_MR_AUDIT_INSERT_ROOM);
				}
			else
				{
				foreach ($roomsList as $r)
					{
					$room_uid=$r->room_uid;
					}
				$query = "UPDATE #__jomres_rooms SET `max_people`='".(int)$max_people."',`room_classes_uid`='".(int)$roomtype."' WHERE `room_uid`='".(int)$room_uid."'";
				$result=doInsertSql($query,_JOMRES_MR_AUDIT_UPDATE_ROOM);
				}
			$query="DELETE FROM #__jomres_rates WHERE property_uid = '".(int)$defaultProperty."'";
			$result=doInsertSql($query,"");
			$query="INSERT INTO #__jomres_rates (
				`rate_title`,
				`rate_description`,
				`validfrom`,
				`validto`,
				`roomrateperday`,
				`mindays`,
				`maxdays`,
				`minpeople`,
				`maxpeople`,
				`roomclass_uid`,
				`ignore_pppn`,
				`allow_ph`,
				`allow_we`,
				`weekendonly`,
				`validfrom_ts`,
				`validto_ts`,
				`property_uid`
				)VALUES (
				'$rate_title',
				'$rate_description',
				'$validfrom',
				'$validto',
				'".(float)$roomrateperday."',
				'".(int)$mindays."',
				'".(int)$maxdays."',
				'".(int)$minpeople."',
				'".(int)$max_people."',
				'".(int)$roomtype."',
				'".(int)$ignore_pppn."',
				'".(int)$allow_ph."',
				'".(int)$allow_we."',
				'".(int)$weekendonly."',
				'$validfrom_ts',
				'$validto_ts',
				'".(int)$defaultProperty."'
				)";
			doInsertSql($query,_JOMRES_MR_AUDIT_INSERT_TARIFF);
			}
		else //////////////////////////////////////////////////////////////////////////////////////////////////////// MRP 
			{
			$numberofRoomsArray		= jomresGetParam( $_POST, 'numberofRooms', array() );
			$roomrateperdayArray	= $_POST['roomrateperday'];
			$existingroomsArray		= $_POST['existingrooms'];
			$max_peopleArray		= jomresGetParam( $_POST, 'max_people', array() );
			$max_peopleTariffArray	= jomresGetParam( $_POST, 'maxpeople_tariff', array() );
			$roomsAndRateData=array();
			$validRoomTypesForProperty=array();

			foreach ($numberofRoomsArray as $key=>$val)
				{
				$roomsAndRateData[$key]['roomtype_uid']=intval($key);
				$roomsAndRateData[$key]['numberOfRooms']=intval($val);
				$roomsAndRateData[$key]['roomrateperday']=floatval($roomrateperdayArray[$key]);
				if (strlen($existingroomsArray[$key])>0)
					{
					$ex=explode(",",$existingroomsArray[$key]);
					// As we haven't validated the array through jomresGetParam (which automatically sets arrays to integers whereas this is an array containing an array) we'll run through it quickly here, ensuring that all values are integers.
					$tmpArr=array();
					foreach ($ex as $e)
						{
						$tmpArr[]=(int)$e;
						}
					$ex=$tmpArr;
					unset($tmpArr);
					}
				else
					$ex=array();
				$roomsAndRateData[$key]['existingrooms']=$ex;
				$roomsAndRateData[$key]['max_people']=intval($max_peopleArray[$key]);
				$roomsAndRateData[$key]['max_people_intariff']=intval($max_peopleTariffArray[$key]);
				}

			// We could probably do this in the previous loop, but keeping it outside makes it a little easier to follow
			
			foreach ($roomsAndRateData as $d)
				{
				
				$revisedExistingRooms=$d['existingrooms'];  // We will add or remove room uids to this array so that we can update max people after adding/removing rooms
				$validRoomTypesForProperty[]=$d['roomtype_uid'];
				if ($d['numberOfRooms'] > count($d['existingrooms']) ) // Let's add some rooms
					{
					// We need to find the next room number available to us
					$query = "SELECT room_number FROM #__jomres_rooms WHERE propertys_uid = '".(int)$defaultProperty."' ORDER BY room_number ";
					$roomnumberList =doSelectSql($query);
					if (count($roomnumberList)>0)
						{
						$roomNumbers=array();
						foreach ($roomnumberList as $n)
							{
							$roomNumbers[]=(int)$n->room_number;
							}
						sort($roomNumbers);
						$nextRoomNumber=end($roomNumbers)+1;
						}
					else
						$nextRoomNumber=1;
						
					$numberToAdd=$d['numberOfRooms']-count($d['existingrooms']);
					for ($i=0;$i<$numberToAdd;$i++)
						{
						$roomNumber=count($d['existingrooms'])+$i+1;
						
						if ($nextRoomNumber < 10)
							$nextRoomNumberStr = "0".(string)$nextRoomNumber;
						else
							$nextRoomNumberStr = (string)$nextRoomNumber;
						
						$query="INSERT INTO #__jomres_rooms (
							`room_classes_uid`,
							`propertys_uid`,
							`room_features_uid`,
							`room_name`,
							`room_number`,
							`room_floor`,
							`room_disabled_access`,
							`max_people`,
							`smoking`
							)VALUES (
							'".(int)$d['roomtype_uid']."',
							 ".(int)$defaultProperty.",
							'',
							'',
							'$nextRoomNumberStr',
							'$room_floor',
							'$room_disabled_access',
							'".(int)$d['max_people']."',
							'$smoking'
						)";
						//var_dump($query);echo "<br>";
						$result=doInsertSql($query,_JOMRES_MR_AUDIT_INSERT_ROOM);
						if ($result)
							$revisedExistingRooms[]=$result;
						$nextRoomNumber++;
						}
					
					}
				else // We need to remove some rooms
					{
					$numberToRemove=count($d['existingrooms'])-$d['numberOfRooms'];
					$reversedExistingRooms=array_reverse($d['existingrooms']);
					for ($i=0;$i<$numberToRemove;$i++)
						{
						$query="DELETE FROM #__jomres_rooms WHERE `propertys_uid` = '".(int)$defaultProperty."' AND `room_uid` = '".(int)$reversedExistingRooms[$i]."'";
						doInsertSql($query,_JOMRES_MR_AUDIT_DELETE_ROOM);
						unset($revisedExistingRooms[$i]);
						}
					
					}
				if (count($revisedExistingRooms)>0)
					{
					// Now we can update the revisedExistingRooms array with max_people
					$gor=genericOr($revisedExistingRooms,"room_uid");
					$query= "UPDATE #__jomres_rooms SET `max_people`='".(int)$d['max_people']."' WHERE ".$gor;
					doInsertSql($query,_JOMRES_MR_AUDIT_DELETE_ROOM);
					}
				// And finally delete the old tariff(s) and add the new one
				// This will take care of the possibility that there are multiple tariffs for a given room type (for example if somebody's changed from Advanced to Normal mode). Multiple tariffs for a room type is very difficult to manage in Normal mode so we will stick with only having one tariff for each room type.
				$query="DELETE FROM #__jomres_rates WHERE property_uid = '".(int)$defaultProperty."' AND roomclass_uid = '".(int)$d['roomtype_uid']."' ";
				$result=doInsertSql($query,"");
				if ($d['numberOfRooms'] > 0)
					{
					$query="INSERT INTO #__jomres_rates (
						`rate_title`,
						`rate_description`,
						`validfrom`,
						`validto`,
						`roomrateperday`,
						`mindays`,
						`maxdays`,
						`minpeople`,
						`maxpeople`,
						`roomclass_uid`,
						`ignore_pppn`,
						`allow_ph`,
						`allow_we`,
						`weekendonly`,
						`validfrom_ts`,
						`validto_ts`,
						`property_uid`
						)VALUES (
						'$rate_title',
						'$rate_description',
						'$validfrom',
						'$validto',
						'".$d['roomrateperday']."',
						'".(int)$mindays."',
						'".(int)$maxdays."',
						'".(int)$minpeople."',
						'".(int)$d['max_people_intariff']."',
						'".(int)$d['roomtype_uid']."',
						'".(int)$ignore_pppn."',
						'".(int)$allow_ph."',
						'".(int)$allow_we."',
						'".(int)$weekendonly."',
						'$validfrom_ts',
						'$validto_ts',
						'".(int)$defaultProperty."'
						)";
					//echo $query;exit;
					doInsertSql($query,_JOMRES_MR_AUDIT_INSERT_TARIFF);
					}
				}
			
			// Finally, the property may have been changed from an SRP to an MRP. If so, it's possible that there will be rooms and tariffs for an SRP room type that still exists in the database. We need to remove them otherwise they'll end up in the booking form.
			$invalidRoomTypesRooms=array();
			$invalidRoomTypesTariffs=array();
			$query = "SELECT room_uid,room_classes_uid FROM #__jomres_rooms WHERE propertys_uid = '".(int)$defaultProperty."'";
			$roomsList =doSelectSql($query);
			$query="SELECT `rates_uid`,`roomclass_uid` FROM #__jomres_rates WHERE property_uid = '".(int)$defaultProperty."'";
			$tariffList=doSelectSql($query);
			if (count($roomsList)>0)
				{
				foreach ($roomsList as $r)
					{
					if (!in_array($r->room_classes_uid,$validRoomTypesForProperty) )
						{
						$query="DELETE FROM #__jomres_rooms WHERE `room_uid`='".(int)$r->room_uid."'";
						doInsertSql($query,_JOMRES_MR_AUDIT_DELETE_ROOM);
						}
					}
				}
			if (count($tariffList)>0)
				{
				foreach ($tariffList as $r)
					{
					if (!in_array($r->roomclass_uid,$validRoomTypesForProperty) )
						{
						$query="DELETE FROM #__jomres_rates WHERE `rates_uid`='".(int)$r->rates_uid."'";
						$result=doInsertSql($query,_JOMRES_MR_AUDIT_DELETE_TARIFF);
						}
					}
				}
			}
		returnToPropertyConfig("");
		}


	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>