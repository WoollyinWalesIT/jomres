<?php
/**
#
 * Mini-component core file: Constructs and displays customer type editing form
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
 * Edit customer type
 #
* @package Jomres
#
 */
class j02116editcustomertype {
	/**
	#
	 * Constructor: Collects data for and displays the edit customer type page
	#
	 */
	function j02116editcustomertype()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $mrConfig,$Itemid;
		$defaultProperty=getDefaultProperty();
		$id       = jomresGetParam( $_REQUEST, 'id', 0 );
		$yesno = array();
		$yesno[] = jomresHTML::makeOption( '0', _JOMRES_COM_MR_NO );
		$yesno[] = jomresHTML::makeOption( '1', _JOMRES_COM_MR_YES );

		$posneg = array();
		$posneg[] = jomresHTML::makeOption( '0', "-" );
		$posneg[] = jomresHTML::makeOption( '1', "+" );

		$output['PAGETITLE']=jr_gettext('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES',_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES);
		$output['HTYPE']=jr_gettext('_JOMRES_VARIANCES_TYPE',_JOMRES_VARIANCES_TYPE);
		$output['HTYPE_TT']=jomresToolTips( jr_gettext('_JOMRES_VARIANCES_TYPE_TT',_JOMRES_VARIANCES_TYPE_TT,false ) );
		$output['HNOTES']=jr_gettext('_JOMRES_VARIANCES_NOTES',_JOMRES_VARIANCES_NOTES);
		$output['HNOTES_TT']=jomresToolTips( jr_gettext('_JOMRES_VARIANCES_NOTES_TT',_JOMRES_VARIANCES_NOTES_TT,false ) );
		$output['HMAXIMUM']=jr_gettext('_JOMRES_VARIANCES_MAXIMUM',_JOMRES_VARIANCES_MAXIMUM);
		$output['HMAXIMUM_TT']=jomresToolTips( jr_gettext('_JOMRES_VARIANCES_MAXIMUM_TT',_JOMRES_VARIANCES_MAXIMUM_TT,false ) );
		$output['HISPERCENTAGE']=jr_gettext('_JOMRES_VARIANCES_ISPERCENTAGE',_JOMRES_VARIANCES_ISPERCENTAGE);
		$output['HISPERCENTAGE_TT']=jomresToolTips( jr_gettext('_JOMRES_VARIANCES_ISPERCENTAGE_TT',_JOMRES_VARIANCES_ISPERCENTAGE_TT, false) );
		$output['HPOSNEG']=jr_gettext('_JOMRES_VARIANCES_POSNEG',_JOMRES_VARIANCES_POSNEG);
		$output['HPOSNEG_TT']=jomresToolTips( jr_gettext('_JOMRES_VARIANCES_POSNEG_TT',_JOMRES_VARIANCES_POSNEG_TT,false ) );
		$output['HVARIANCE']=jr_gettext('_JOMRES_VARIANCES_VARIANCE',_JOMRES_VARIANCES_VARIANCE);
		$output['HVARIANCE_TT']=jomresToolTips( jr_gettext('_JOMRES_VARIANCES_VARIANCE_TT',_JOMRES_VARIANCES_VARIANCE_TT,false ) );
		$output['ITEMID']=$Itemid;
		$output['ID']= $id;

		if ( $id!="" )
			{
			$query="SELECT `type`,`notes`,`maximum`,`is_percentage`,`posneg`,`variance`,`published` FROM `#__jomres_customertypes` WHERE id = '".(int)$id."' AND property_uid = '".(int)$defaultProperty."' ORDER BY type";
			$ex =doSelectSql($query,2);

			$output['TYPE']=stripslashes($ex['type']);
			$output['NOTES']=stripslashes($ex['notes']);
			$output['MAXIMUM']=$ex['maximum'];

			$output['ISPERCENTAGE']=jomresHTML::selectList( $yesno, 'is_percentage','class="inputbox" size="1"', 'value', 'text', $ex['is_percentage']);
			$output['POSNEG']=jomresHTML::selectList( $posneg, 'posneg','class="inputbox" size="1"', 'value', 'text', $ex['posneg']);
			$output['VARIANCE']=number_format($ex['variance'],2);
			}
		else
			{
			$output['TYPE']="";
			$output['NOTES']="";
			$output['MAXIMUM']="10";
			$output['ISPERCENTAGE']=jomresHTML::selectList( $yesno, 'is_percentage','class="inputbox" size="1"', 'value', 'text', "0");
			$output['POSNEG']=jomresHTML::selectList( $posneg, 'posneg','class="inputbox" size="1"', 'value', 'text', "0");
			$output['VARIANCE']=number_format(0,2);
			}

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1">';

		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','','',true,'saveCustomerType');
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&task=listCustomerTypes&Itemid=$Itemid"),'');
		if ($id != 0 )
			$jrtb .= $jrtbar->toolbarItem('delete',jomresURL(JOMRES_SITEPAGE_URL."&task=deleteCustomerType".jomresURLToken()."&no_html=1&id=$id&Itemid=$Itemid"),'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'edit_customertype.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
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