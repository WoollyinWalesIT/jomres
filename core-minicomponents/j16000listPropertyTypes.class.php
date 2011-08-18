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

class j16000listPropertyTypes
	{
	function j16000listPropertyTypes()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$editIcon	='<IMG SRC="'.get_showtime('live_site').'/jomres/images/jomresimages/small/EditItem.png" border="0">';
		$ptypeData=array();
		$pList=array();
		$pList['PAGETITLE'] =_JOMRES_COM_PTYPES_LIST_TITLE;
		$pList['HPTYPE'] =_JOMRES_COM_PTYPES_PTYPE;
		$pList['HPTYPE_DESC'] =_JOMRES_COM_PTYPES_PTYPE_DESC;
		$pList['HPUBLISHED']=_JOMRES_COM_MR_VRCT_PUBLISHED;
		$pList['_JOMRES_ORDER']=_JOMRES_ORDER;
		
		$query="SELECT `id`,`ptype`,`ptype_desc`,`published`,`order` FROM #__jomres_ptypes ORDER BY `order` ASC";
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
				$ptypeData['published'] = get_showtime('live_site')."/".JOMRES_ADMINISTRATORDIRECTORY."/images/tick.png";
			else
				$ptypeData['published'] = get_showtime('live_site')."/".JOMRES_ADMINISTRATORDIRECTORY."/images/publish_x.png";
			$rowInfo.="
				<tr>
					<td class=\"jradmin_subheader_la\" width=\"20\"><input type=\"checkbox\" id=\"cb".$counter."\" name=\"idarray[]\" value=\"".$ptypeData['id']."\" onClick=\"jomres_isChecked(this.checked);\"></td>
					<td class=\"jradmin_subheader_la\"><a href=\"".JOMRES_SITEPAGE_URL_ADMIN."&task=editPropertyType&id=".$ptypeData['id']."\">".$editIcon."</a></td>
					<td class=\"jradmin_subheader_la\">".$ptypeData['ptype']."</td>
					<td class=\"jradmin_subheader_la\">".$ptypeData['ptype_desc']."</td>
					<td class=\"jradmin_subheader_la\"><a href=\"".JOMRES_SITEPAGE_URL_ADMIN."&task=publishPropertyType&id=".$ptypeData['id']."\"><img src=\"".$ptypeData['published']."\" border=\"0\" /></a></td>
					<td class=\"jradmin_subheader_la\"><input class=\"inputbox\" type=\"text\" size=\"5\" name=\"order_array[".$ptypeData['id']."]\" value='".$ptype->order."'/></td>
				</tr>
				";
			}

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','','',true,'save_ptype_order');
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

	function touch_template_language()
		{
		$output=array();
		
		$query="SELECT id,ptype FROM #__jomres_ptypes";
		$ptypeList = doSelectSql($query);
		foreach ($ptypeList as $ptype)
			{
			$output[]	=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTYTYPES'.$ptype->id,$ptype->ptype);
			}
		
		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}