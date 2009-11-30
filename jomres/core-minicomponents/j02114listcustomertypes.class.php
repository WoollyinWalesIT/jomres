<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * Lists customer types for admin
 #
* @package Jomres
#
 */
class j02114listcustomertypes {
	/**
	#
	 * Constructor: Lists customer types for admin
	#
	 */
	function j02114listcustomertypes()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$mrConfig=getPropertySpecificSettings();
		$defaultProperty=getDefaultProperty();

		$output['HTYPE']=jr_gettext('_JOMRES_VARIANCES_TYPE',_JOMRES_VARIANCES_TYPE);
		$output['HNOTES']=jr_gettext('_JOMRES_VARIANCES_NOTES',_JOMRES_VARIANCES_NOTES);
		$output['HMAXIMUM']=jr_gettext('_JOMRES_VARIANCES_MAXIMUM',_JOMRES_VARIANCES_MAXIMUM);
		$output['HISPERCENTAGE']=jr_gettext('_JOMRES_VARIANCES_ISPERCENTAGE',_JOMRES_VARIANCES_ISPERCENTAGE);
		$output['HPOSNEG']=jr_gettext('_JOMRES_VARIANCES_POSNEG',_JOMRES_VARIANCES_POSNEG);
		$output['HVARIANCE']=jr_gettext('_JOMRES_VARIANCES_VARIANCE',_JOMRES_VARIANCES_VARIANCE);
		$output['HPUBLISHIMAGE']=jr_gettext('_JOMRES_COM_MR_VRCT_PUBLISHED',_JOMRES_COM_MR_VRCT_PUBLISHED);
		$output['HORDER']=jr_gettext('_JOMRES_ORDER',_JOMRES_ORDER);

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';

		$query="SELECT `id`,`type`,`notes`,`maximum`,`is_percentage`,`posneg`,`variance`,`published`,`order` FROM `#__jomres_customertypes` where property_uid = '".(int)$defaultProperty."' ORDER BY `order` ASC";
		$exList =doSelectSql($query);
		$rows=array();
		foreach($exList as $ex)
			{
			$published=$ex->published;
			if ($published)
				$img = "administrator/images/tick.png";
			else
				$img = "administrator/images/publish_x.png";
			$rw['PUBLISHIMAGE']=$img;
			$rw['ID']=$ex->id;

			$jrtbar =jomres_getSingleton('jomres_toolbar');
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem('edit',jomresURL(JOMRES_SITEPAGE_URL."&task=editCustomerType&id=".$ex->id ),'');
			$jrtb .= $jrtbar->endTable();
			$rw['EDITLINK']=$jrtb;

			$rw['TYPE']=jr_gettext('_JOMRES_CUSTOMTEXT_GUESTTYPE'.$ex->id,stripslashes($ex->type));
			$rw['NOTES']=jr_gettext('_JOMRES_CUSTOMTEXT_GUESTNOTES'.$ex->id,stripslashes($ex->notes));
			$rw['MAXIMUM']=$ex->maximum;
			if ($ex->is_percentage=="1")
				$rw['ISPERCENTAGE']=jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES);
			else
				$rw['ISPERCENTAGE']=jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO);
			if ($ex->posneg=="1")
				$rw['POSNEG']="+";
			else
				$rw['POSNEG']="-";
			$rw['VARIANCE']=number_format($ex->variance,2, '.', '');
			$rw['PUBLISHLINK']='<a href="'.jomresURL(JOMRES_SITEPAGE_URL."&task=publishCustomerType&no_html=1&id=".($ex->id) ).'"><img src="'.$img.'" border="0"></a>';

			$jrtbar =jomres_getSingleton('jomres_toolbar');
			$jrtb  = $jrtbar->startTable();
			if ($published)
				$jrtb .= $jrtbar->toolbarItem('publish',jomresURL(JOMRES_SITEPAGE_URL."&task=publishCustomerType&no_html=1&id=".$ex->id ),'');
			else
				$jrtb .= $jrtbar->toolbarItem('unpublish',jomresURL(JOMRES_SITEPAGE_URL."&task=publishCustomerType&no_html=1&id=".$ex->id ),'');
			$jrtb .= $jrtbar->endTable();
			$rw['PUBLISHLINK']=$jrtb;

			$rw['CURRENCY']=$mrConfig['currency'];
			if (empty($ex->order) )
				$order=0;
			else
				$order=$ex->order;
			$rw['ORDER']=$order;
			$rows[]=$rw;
			}
		$output['PAGETITLE']=jr_gettext('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES',_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES);
		
		$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('new',jomresURL(JOMRES_SITEPAGE_URL."&task=editCustomerType"),'');
		$jrtb .= $jrtbar->toolbarItem('save','',jr_gettext('_JOMRES_ORDER',_JOMRES_ORDER,false,true),true,'saveCustomerTypeOrder');
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL.""),'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'list_customertypes.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->displayParsedTemplate();
		}


	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES',_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES);
		$output[]		=jr_gettext('_JOMRES_VARIANCES_TYPE',_JOMRES_VARIANCES_TYPE);
		$output[]		=jr_gettext('_JOMRES_VARIANCES_TYPE_TT',_JOMRES_VARIANCES_TYPE_TT);
		$output[]		=jr_gettext('_JOMRES_VARIANCES_NOTES',_JOMRES_VARIANCES_NOTES);
		$output[]		=jr_gettext('_JOMRES_VARIANCES_NOTES_TT',_JOMRES_VARIANCES_NOTES_TT);
		$output[]		=jr_gettext('_JOMRES_VARIANCES_MAXIMUM',_JOMRES_VARIANCES_MAXIMUM);
		$output[]		=jr_gettext('_JOMRES_VARIANCES_MAXIMUM_TT',_JOMRES_VARIANCES_MAXIMUM_TT);
		$output[]		=jr_gettext('_JOMRES_VARIANCES_ISPERCENTAGE',_JOMRES_VARIANCES_ISPERCENTAGE);
		$output[]		=jr_gettext('_JOMRES_VARIANCES_ISPERCENTAGE_TT',_JOMRES_VARIANCES_ISPERCENTAGE_TT);
		$output[]		=jr_gettext('_JOMRES_VARIANCES_POSNEG',_JOMRES_VARIANCES_POSNEG);
		$output[]		=jr_gettext('_JOMRES_VARIANCES_POSNEG_TT',_JOMRES_VARIANCES_POSNEG_TT);
		$output[]		=jr_gettext('_JOMRES_VARIANCES_VARIANCE',_JOMRES_VARIANCES_VARIANCE);
		$output[]		=jr_gettext('_JOMRES_VARIANCES_VARIANCE_TT',_JOMRES_VARIANCES_VARIANCE_TT);


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