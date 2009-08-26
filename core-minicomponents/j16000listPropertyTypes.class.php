<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j16000listPropertyTypes
	{
	function j16000listPropertyTypes()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jomresAdminPath,$jomresConfig_live_site;
		
		$editIcon	='<IMG SRC="'.$jomresConfig_live_site.'/jomres/images/jomresimages/small/EditItem.png" border="0">';
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
					<td class=\"jradmin_subheader_la\" width=\"20\"><input type=\"checkbox\" id=\"cb".$counter."\" name=\"idarray[]\" value=\"".$ptypeData['id']."\" onClick=\"jomres_isChecked(this.checked);\"></td>
					<td class=\"jradmin_subheader_la\"><a href=\"".JOMRES_SITEPAGE_URL_ADMIN."&task=editPropertyType&id=".$ptypeData['id']."\">".$editIcon."</a></td>
					<td class=\"jradmin_subheader_la\">".$ptypeData['ptype']."</td>
					<td class=\"jradmin_subheader_la\">".$ptypeData['ptype_desc']."</td>
					<td class=\"jradmin_subheader_la\"><a href=\"".JOMRES_SITEPAGE_URL_ADMIN."&task=publishPropertyType&id=".$ptypeData['id']."\"><img src=\"".$ptypeData['published']."\" border=\"0\" /></a></td>
				</tr>
				";
			}

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/AddItem.png");
		$link = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem('editPropertyType',$link,_JOMRES_COM_MR_NEWTARIFF,$submitOnClick=true,$submitTask="editPropertyType",$image);
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,'');
		$jrtb .= $jrtbar->spacer();
		$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/WasteBasket.png");
		$link = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem('deletePropertyType',$link,_JOMRES_COM_MR_ROOM_DELETE,$submitOnClick=true,$submitTask="deletePropertyType",$image);
		$jrtb .= $jrtbar->endTable();

		HTML_jomres::listpropertyTypes_html( $pList,$rowInfo,$counter,$jrtb);
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}