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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * Edit a property feature (global property features off - else managed in backend)
 #
* @package Jomres
#
 */
class j04100editpropertyfeature {
	/**
	#
	 * Edit a property feature (global property features off - else managed in backend)
	#
	 */
	function j04100editpropertyfeature($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$defaultProperty=getDefaultProperty();
		$propertyFeatureUid = intval( jomresGetParam( $_REQUEST, 'propertyFeatureUid',	0 ) );
		$clone				= intval( jomresGetParam( $_REQUEST, 'clone',	0 ) );
		if ($propertyFeatureUid)
			{
			$query = "SELECT hotel_feature_abbv,hotel_feature_full_desc,property_uid FROM #__jomres_hotel_features WHERE hotel_features_uid  = '".(int)$propertyFeatureUid."' AND property_uid = '".(int)$defaultProperty."'";
			$pFeatureList =doSelectSql($query);
			foreach($pFeatureList as $pFeature)
				{
				$output['FEATURE_ABBV']=stripslashes($pFeature->hotel_feature_abbv);
				$output['FEATURE_DESCRIPTION']=stripslashes($pFeature->hotel_feature_full_desc);
				}
			}
		if ($clone)
			$propertyFeatureUid=FALSE;

		$output['INDEX']="index.php";
		$output['PROPERTYFEATUREUID']=$propertyFeatureUid;
		$output['HFEATUREABBV']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV',_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV);
		$output['HFEATUREDESCRIPTION']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC',_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC);
		$output['MOSCONFIGLIVESITE']=get_showtime('live_site');
		$output['PAGETITLE']=jr_gettext('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES',_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES);

		$cancelText=jr_gettext('_JOMRES_COM_A_CANCEL',_JOMRES_COM_A_CANCEL,FALSE);
		$deleteText=jr_gettext('_JOMRES_COM_MR_ROOM_DELETE',_JOMRES_COM_MR_ROOM_DELETE,FALSE);
		$saveText=jr_gettext('_JOMRES_COM_MR_SAVE',_JOMRES_COM_MR_SAVE,FALSE);

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','',$saveText,true,'savePropertyFeature');
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&task=propertyadmin"),$cancelText);
		if (!$clone)
			$jrtb .= $jrtbar->toolbarItem('delete',jomresURL(JOMRES_SITEPAGE_URL."&task=deletePropertyFeature".jomresURLToken()."&propertyFeatureUid=".$propertyFeatureUid.""),$deleteText);
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'editpropertyfeature.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->displayParsedTemplate();
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