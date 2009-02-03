<?php
/**
#
 * Functins for showing and saving site configuration
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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################


//---------------------------------------------
//-C R E A T E P R O P E R T Y  T Y P E S  ----
//---------------------------------------------

/**
#
 * Lists property types
#
 */
function listPropertyTypes()
	{
	global $jomresAdminPath,$jomresConfig_live_site;
	
	$editIcon	='<IMG SRC="'.$jomresConfig_live_site.'/components/com_jomres/images/jomresimages/small/EditItem.png" border="0">';
	$ptypeData=array();
	$pList=array();
	$pList['PAGETITLE'] =_JOMRES_COM_PTYPES_LIST_TITLE;
	$pList['HPTYPE'] =_JOMRES_COM_PTYPES_PTYPE;
	$pList['HPTYPE_DESC'] =_JOMRES_COM_PTYPES_PTYPE_DESC;
	$pList['HPUBLISHED']=_JOMRES_COM_MR_VRCT_PUBLISHED;
	$query="SELECT id, ptype,ptype_desc,published FROM #__jomres_ptypes ORDER BY `ptype` ASC";
	$ptypeList = doSelectSql($query);
	$rowInfo="";
	$counter=0;
	foreach ($ptypeList as $ptype)
		{
		$counter++;
		$ptypeData['id']=$ptype->id;
		$ptypeData['ptype']=$ptype->ptype;
		$ptypeData['ptype_desc']=$ptype->ptype_desc;
		$published=$ptype->published;
		if ($published)
			$ptypeData['published'] = $jomresConfig_live_site."/".JOMRES_ADMINISTRATORDIRECTORY."/images/tick.png";
		else
			$ptypeData['published'] = $jomresConfig_live_site."/".JOMRES_ADMINISTRATORDIRECTORY."/images/publish_x.png";
		$rowInfo.="
			<tr>
				<td class=\"jradmin_subheader_la\" width=\"20\"><input type=\"checkbox\" id=\"cb".$counter."\" name=\"idarray[]\" value=\"".$ptypeData['id']."\" onClick=\"isChecked(this.checked);\"></td>
				<td class=\"jradmin_subheader_la\"><a href=\"index2.php?option=com_jomres&task=editPropertyType&id=".$ptypeData['id']."\">".$editIcon."</a></td>
				<td class=\"jradmin_subheader_la\">".$ptypeData['ptype']."</td>
				<td class=\"jradmin_subheader_la\">".$ptypeData['ptype_desc']."</td>
				<td class=\"jradmin_subheader_la\"><a href=\"index2.php?option=com_jomres&task=publishPropertyType&id=".$ptypeData['id']."\"><img src=\"".$ptypeData['published']."\" border=\"0\" /></a></td>
			</tr>
			";
		}

	$jrtbar = new jomres_toolbar();
	$jrtb  = $jrtbar->startTable();
	$image = $jrtbar->makeImageValid("/components/com_jomres/images/jomresimages/small/AddItem.png");
	$link = $jomresConfig_live_site.JOMRES_ADMINISTRATORDIRECTORY."/index2.php?option=com_jomres";
	$jrtb .= $jrtbar->customToolbarItem('editPropertyType',$link,_JOMRES_COM_MR_NEWTARIFF,$submitOnClick=true,$submitTask="editPropertyType",$image);
	$jrtb .= $jrtbar->toolbarItem('cancel',"index2.php?option=com_jomres",'');
	$jrtb .= $jrtbar->spacer();
	$image = $jrtbar->makeImageValid("/components/com_jomres/images/jomresimages/small/WasteBasket.png");
	$link = $jomresConfig_live_site.JOMRES_ADMINISTRATORDIRECTORY."/index2.php?option=com_jomres";
	$jrtb .= $jrtbar->customToolbarItem('deletePropertyType',$link,_JOMRES_COM_MR_ROOM_DELETE,$submitOnClick=true,$submitTask="deletePropertyType",$image);
	$jrtb .= $jrtbar->endTable();

	HTML_jomres::listpropertyTypes_html( $pList,$rowInfo,$counter,$jrtb);
	}

/**
#
 * Publishes a property type
#
 */
function publishPropertyType()
	{
	$id = jomresGetParam( $_GET, 'id', 0 );
	$query="SELECT published FROM #__jomres_ptypes WHERE id = '".(int)$id."'";
	$ptypeList = doSelectSql($query);
	foreach ($ptypeList as $ptype)
		{
		$published = $ptype->published;
		}
	if ($published)
		$query="UPDATE #__jomres_ptypes SET `published`='0' WHERE id = '$id'";
	else
		$query="UPDATE #__jomres_ptypes SET `published`='1' WHERE id = '$id'";
	if (doInsertSql($query, FALSE)) jomresRedirect( "index2.php?option=com_jomres&task=listPropertyTypes",_JOMRES_COM_PTYPES_SAVED) ;
	}

/**
#
 * Edit a property type
#
 */
function editPropertyType()
	{
	global $jomresAdminPath,$jomresConfig_live_site;
	$id = jomresGetParam( $_GET, 'id', 0 );
	$ptypeData=array();
	$pList=array();
	$pList['PAGETITLE'] =_JOMRES_COM_PTYPES_LIST_TITLE_EDIT;
	$pList['HPTYPE'] =_JOMRES_COM_PTYPES_PTYPE;
	$pList['HPTYPE_DESC'] =_JOMRES_COM_PTYPES_PTYPE_DESC;
	$pList['HPUBLISHED']=_JOMRES_COM_MR_VRCT_PUBLISHED;
	$pList['FURTHER']=_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER;
	
	$ptypeData['ptype']="";
	$ptypeData['ptype_desc']="";
	$ptypeData['published'] ="";
	if (isset($id) && !empty($id) )
		{
		$query="SELECT ptype,ptype_desc,published FROM #__jomres_ptypes WHERE id = '".(int)$id."' ";
		$ptypeList = doSelectSql($query);
		$rowInfo="";
		foreach ($ptypeList as $ptype)
			{
			$ptypeData['ptype']=stripslashes($ptype->ptype);
			$ptypeData['ptype_desc']=stripslashes($ptype->ptype_desc);
			$published=$ptype->published;
			if ($published)
				$ptypeData['published'] = JOMRES_ADMINISTRATORDIRECTORY."/images/tick.png";
			else
				$ptypeData['published'] = JOMRES_ADMINISTRATORDIRECTORY."/images/publish_x.png";
			}
		}
	$rowInfo="";
	$rowInfo="
		<tr>
			<td class=\"jradmin_subheader_la\"><input class=\"inputbox\" name=\"ptype\" value=\"".$ptypeData['ptype']."\" /></td>
			<td class=\"jradmin_subheader_la\"><input class=\"inputbox\" name=\"ptype_desc\" value=\"".$ptypeData['ptype_desc']."\" /></td>
		</tr>
		";

	$hidden="<input type=\"hidden\" name=\"id\" value=\"".$id."\" />";

	$jrtbar = new jomres_toolbar();
	$jrtb  = $jrtbar->startTable();
	$image = $jrtbar->makeImageValid("/components/com_jomres/images/jomresimages/small/Save.png");
	$link = $jomresConfig_live_site.JOMRES_ADMINISTRATORDIRECTORY."/index2.php?option=com_jomres";
	$jrtb .= $jrtbar->customToolbarItem('savePropertyType',$link,_JOMRES_COM_MR_SAVE,$submitOnClick=true,$submitTask="savePropertyType",$image);
	$jrtb .= $jrtbar->toolbarItem('cancel',"index2.php?option=com_jomres&task=listPropertyTypes",'');
	$jrtb .= $jrtbar->endTable();


	HTML_jomres::editpropertyType_html( $pList,$rowInfo,$hidden,$jrtb);
	}

/**
#
 * Save a property type
#
 */
function savePropertyType()
	{
	global $jomresConfig_lang;
	if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
	$id = jomresGetParam( $_POST, 'id', 0 );
	$ptype = jomresGetParam( $_POST, 'ptype', '' );
	$ptype_desc = jomresGetParam( $_POST, 'ptype_desc', '' );
	$ptype_desc=ereg_replace("[^A-Za-z0-9]", "", $ptype_desc);
	
	if (!is_dir(JOMRESPATH_BASE.'/language/'.$ptype_desc) && is_writable(JOMRESPATH_BASE.'/language/') )
		{
		mkdir(JOMRESPATH_BASE.'/language/'.$ptype_desc);
		copy (JOMRESPATH_BASE.'/language/'.$jomresConfig_lang.".php",JOMRESPATH_BASE.'/language/'.$ptype_desc."/".$jomresConfig_lang.".php" );
		}
	if (isset($id) && !empty($id) )
		$query="UPDATE #__jomres_ptypes SET `ptype`='$ptype',`ptype_desc`='$ptype_desc' WHERE id = '".(int)$id."'";
	else
		$query="INSERT INTO #__jomres_ptypes (`ptype`,`ptype_desc`) VALUES ('$ptype','$ptype_desc')";

	if (!doInsertSql($query,FALSE)) echo "Nope";
	jomresRedirect( "index2.php?option=com_jomres&task=listPropertyTypes",_JOMRES_COM_PTYPES_SAVED);
	}

/**
#
 * Delete a property type
#
 */
function deletePropertyType()
	{
	if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
	$idArray = jomresGetParam( $_POST, 'idarray', array() );
	$success=true;
	if (count($idArray)>0)
		{
		foreach ($idArray as $id)
			{
			$query="SELECT ptype_id FROM #__jomres_propertys WHERE ptype_id = '".(int)$id."'";
			$ptypeList = doSelectSql($query);
			if (count($ptypeList)>0)
				{
				$success=false;
				echo _JOMRES_COM_PTYPES_UNABLETO_DELETE."<br>";
				}
			else
				{
				$query="DELETE FROM #__jomres_ptypes WHERE id = '".(int)$id."'";
				if (!doInsertSql($query,FALSE)) echo "Nope";
				}
			}
		}
	if ($success)
		jomresRedirect( "index2.php?option=com_jomres&task=listPropertyTypes",_JOMRES_COM_PTYPES_DELETED);
	}

?>