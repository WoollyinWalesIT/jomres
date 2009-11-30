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


class j06002editCoupon {
	function j06002editCoupon()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		if (!$thisJRUser->userIsManager)
			return;
			
		$defaultProperty=getDefaultProperty();
		$pageoutput=array();
		$output=array();
		
		$coupon_id				= (int)jomresGetParam( $_REQUEST, 'coupon_id', 0 );

		$output['PAGETITLE']=jr_gettext('_JRPORTAL_COUPONS_TITLE',_JRPORTAL_COUPONS_TITLE);
		$output['INFO']=jr_gettext('_JRPORTAL_COUPONS_DESC',_JRPORTAL_COUPONS_DESC);
		$output['HCOUPONCODE']=jr_gettext('_JRPORTAL_COUPONS_CODE',_JRPORTAL_COUPONS_CODE);
		$output['HVALIDFROM']=jr_gettext('_JRPORTAL_COUPONS_VALIDFROM',_JRPORTAL_COUPONS_VALIDFROM);
		$output['HVALIDTO']=jr_gettext('_JRPORTAL_COUPONS_VALIDTO',_JRPORTAL_COUPONS_VALIDTO);
		$output['HAMOUNT']=jr_gettext('_JRPORTAL_COUPONS_AMOUNT',_JRPORTAL_COUPONS_AMOUNT);
		$output['HISPERCENTAGE']=jr_gettext('_JRPORTAL_COUPONS_ISPERCENTAGE',_JRPORTAL_COUPONS_ISPERCENTAGE);
		//$output['HROOMONLY']=jr_gettext('_JRPORTAL_COUPONS_ROOMONLY',_JRPORTAL_COUPONS_ROOMONLY);
		
		if ($coupon_id == 0)
			{
			$output['COUPON_ID']=0;
			$output['COUPONCODE']=generateJomresRandomString(15);
			$output['VALIDFROM']=generateDateInput("valid_from",str_replace("-","/",date("Y-m-d")) );
			$output['VALIDTO']=generateDateInput("valid_to",str_replace("-","/",date("Y-m-d")));
			$output['AMOUNT']=10.00;
			$percentageOptions[]=jomresHTML::makeOption( '0', jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,FALSE) );
			$percentageOptions[]=jomresHTML::makeOption( '1', jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,FALSE));
			$output['ISPERCENTAGE']=jomresHTML::selectList($percentageOptions, 'is_percentage', 'class="inputbox" size="1"', 'value', 'text', 1);
			
			/*
			$roomOnlyOptions[]=jomresHTML::makeOption( '0', jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,FALSE) );
			$roomOnlyOptions[]=jomresHTML::makeOption( '1', jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,FALSE));
			$output['ROOMONLY']=jomresHTML::selectList($roomOnlyOptions, 'rooms_only', 'class="inputbox" size="1"', 'value', 'text', 0);
			*/
			}
		else
			{
			$query = "SELECT `coupon_id`,`coupon_code`,`valid_from`,`valid_to`,`amount`,`is_percentage`,`rooms_only` FROM #__jomres_coupons WHERE property_uid = ".$defaultProperty." AND coupon_id=".$coupon_id;
			$result = doSelectSql($query,2);
			if ($result)
				{
				$output['COUPON_ID']=$result['coupon_id'];
				$output['COUPONCODE']=$result['coupon_code'];
				
				$output['VALIDFROM']=generateDateInput("valid_from",str_replace("-","/",$result['valid_from']) );
				$output['VALIDTO']=generateDateInput("valid_to",str_replace("-","/",$result['valid_to']));
				$output['AMOUNT']=$result['amount'];

				$percentageOptions[]=jomresHTML::makeOption( '0', jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,FALSE) );
				$percentageOptions[]=jomresHTML::makeOption( '1', jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,FALSE));
				$output['ISPERCENTAGE']=jomresHTML::selectList($percentageOptions, 'is_percentage', 'class="inputbox" size="1"', 'value', 'text', $result['is_percentage']);
				
				/*
				$roomOnlyOptions[]=jomresHTML::makeOption( '0', jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,FALSE) );
				$roomOnlyOptions[]=jomresHTML::makeOption( '1', jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,FALSE));
				$output['ROOMONLY']=jomresHTML::selectList($roomOnlyOptions, 'rooms_only', 'class="inputbox" size="1"', 'value', 'text', $result['rooms_only']);
				*/
				}
			}
			
		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','','',true,'saveCoupon');
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&task=listCoupons"),"");
		if ($coupon_id>0)
			$jrtb .= $jrtbar->toolbarItem('delete',jomresURL(JOMRES_SITEPAGE_URL."&task=deleteCoupon".jomresURLToken()."&no_html=1&coupon_id=$coupon_id"),'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;
		
		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->readTemplatesFromInput( 'edit_coupon.html' );
		$tmpl->displayParsedTemplate();
		}

	function touch_template_language()
		{
		$output=array();

		$output[]	=jr_gettext('_JRPORTAL_COUPONS_TITLE',_JRPORTAL_COUPONS_TITLE);
		$output[]	=jr_gettext('_JRPORTAL_COUPONS_DESC',_JRPORTAL_COUPONS_DESC);
		$output[]	=jr_gettext('_JRPORTAL_COUPONS_CODE',_JRPORTAL_COUPONS_CODE);
		$output[]	=jr_gettext('_JRPORTAL_COUPONS_VALIDFROM',_JRPORTAL_COUPONS_VALIDFROM);
		$output[]	=jr_gettext('_JRPORTAL_COUPONS_VALIDTO',_JRPORTAL_COUPONS_VALIDTO);
		$output[]	=jr_gettext('_JRPORTAL_COUPONS_AMOUNT',_JRPORTAL_COUPONS_AMOUNT);
		$output[]	=jr_gettext('_JRPORTAL_COUPONS_ISPERCENTAGE',_JRPORTAL_COUPONS_ISPERCENTAGE);
		//$output[]	=jr_gettext('_JRPORTAL_COUPONS_ROOMONLY',_JRPORTAL_COUPONS_ROOMONLY);
		//$output[]	=jr_gettext('_JRPORTAL_COUPONS_ROOMONLY_DESC',_JRPORTAL_COUPONS_ROOMONLY_DESC);

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
?>