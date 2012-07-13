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
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$featureUid = jomresGetParam( $_REQUEST, 'featureUid',	0 );
		$clone		= intval( jomresGetParam( $_REQUEST, 'clone',	FALSE ) );
		$defaultProperty=getDefaultProperty();
		if ($featureUid!="")
			{
			$query = "SELECT room_features_uid,feature_description FROM #__jomres_room_features WHERE room_features_uid = '".(int)$featureUid."' AND property_uid = '".(int)$defaultProperty."'";
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

		$cancelText=jr_gettext('_JOMRES_COM_A_CANCEL',_JOMRES_COM_A_CANCEL,FALSE);
		$deleteText=jr_gettext('_JOMRES_COM_MR_ROOM_DELETE',_JOMRES_COM_MR_ROOM_DELETE,FALSE);
		$saveText=jr_gettext('_JOMRES_COM_MR_SAVE',_JOMRES_COM_MR_SAVE,FALSE);

		$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','',$saveText,true,'saveRoomFeature');
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&task=propertyadmin"),$cancelText);
		if (!$clone && $featureUid)
			$jrtb .= $jrtbar->toolbarItem('delete',jomresURL(JOMRES_SITEPAGE_URL."&task=deleteRoomFeature".jomresURLToken()."&roomFeatureUid=".$featureUid.""),$deleteText);
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['PAGETITLE']=jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES',_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES);

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';
		$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'edit_room_feature.html');
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