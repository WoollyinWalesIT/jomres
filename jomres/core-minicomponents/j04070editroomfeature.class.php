<?php
/**
#
 * Mini-component core file: Edit a room feature
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * Edit a room feature
 #
* @package Jomres
#
 */
class j04070editroomfeature {
	/**
	#
	 * Edit a room feature
	#
	 */
	function j04070editroomfeature($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $mrConfig,$Itemid;
		$featureUid = jomresGetParam( $_REQUEST, 'featureUid',	"" );
		$clone		= intval( jomresGetParam( $_REQUEST, 'clone',	FALSE ) );
		$defaultProperty=getDefaultProperty();
		if ($featureUid!="")
			{
			$query = "SELECT room_features_uid,feature_description FROM #__jomres_room_features WHERE room_features_uid LIKE '".(int)$featureUid."' AND property_uid LIKE '".(int)$defaultProperty."'";
			$roomFeatureList =doSelectSql($query);
			foreach($roomFeatureList as $roomFeature)
				{
				$output['FEATURE_DESCRIPTION']=stripslashes($roomFeature->feature_description);
				}
			}
		$query="SELECT propertys_uid FROM #__jomres_propertys";
		$countproperties = doSelectSql($query);
		if ($clone)
			$featureUid=FALSE;

		$output['PROPERTYDROPDOWN']="";
		$output['ROOMFEATUREUID']=$featureUid;
		//$output['FEATURES']=$featureListTxt;
		//$output['PROPERTYUID']=$propertys_uid;
		if ($clone)
			$output['ROOMFEATUREUID']="";
		$output['HFEATUREDESCRIPTION']=jr_gettext('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT',_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT);
		//$output['MOSCONFIGLIVESITE']=$jomresConfig_live_site;
		$output['ITEMID']=$Itemid;

		$cancelText=jr_gettext('_JOMRES_COM_A_CANCEL',_JOMRES_COM_A_CANCEL,FALSE);
		$deleteText=jr_gettext('_JOMRES_COM_MR_ROOM_DELETE',_JOMRES_COM_MR_ROOM_DELETE,FALSE);
		$saveText=jr_gettext('_JOMRES_COM_MR_SAVE',_JOMRES_COM_MR_SAVE,FALSE);

		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','',$saveText,true,'saveRoomFeature');
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL("index.php?option=com_jomres&task=propertyadmin&Itemid=$Itemid"),$cancelText);
		if (!$clone)
			$jrtb .= $jrtbar->toolbarItem('delete',jomresURL("index.php?option=com_jomres&task=deleteRoomFeature".jomresURLToken()."&roomFeatureUid=".$featureUid."&Itemid=$Itemid"),$deleteText);
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['PAGETITLE']=jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES',_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES);

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1">';

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'editroomfeature.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->displayParsedTemplate();
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		= jr_gettext('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT',_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT);
		$output[]		= jr_gettext('_JOMRES_COM_A_CANCEL',_JOMRES_COM_A_CANCEL);
		$output[]		= jr_gettext('_JOMRES_COM_MR_ROOM_DELETE',_JOMRES_COM_MR_ROOM_DELETE);
		$output[]		= jr_gettext('_JOMRES_COM_MR_SAVE',_JOMRES_COM_MR_SAVE);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES',_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
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