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

class j06002listCoupons
	{
	function j06002listCoupons()
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
		
		$defaultProperty=getDefaultProperty();
		$output=array();
		$pageoutput=array();
		
		$output['HEDITLINK']=jr_gettext('_JOMRES_COM_MR_EXTRA_LINKTEXT',_JOMRES_COM_MR_EXTRA_LINKTEXT,$editable=false,$isLink=true);
		
		$output['PAGETITLE']=jr_gettext('_JRPORTAL_COUPONS_TITLE',_JRPORTAL_COUPONS_TITLE);
		$output['INFO']=jr_gettext('_JRPORTAL_COUPONS_DESC',_JRPORTAL_COUPONS_DESC);
		$output['HCOUPONCODE']=jr_gettext('_JRPORTAL_COUPONS_CODE',_JRPORTAL_COUPONS_CODE);
		$output['HVALIDFROM']=jr_gettext('_JRPORTAL_COUPONS_VALIDFROM',_JRPORTAL_COUPONS_VALIDFROM);
		$output['HVALIDTO']=jr_gettext('_JRPORTAL_COUPONS_VALIDTO',_JRPORTAL_COUPONS_VALIDTO);
		$output['HAMOUNT']=jr_gettext('_JRPORTAL_COUPONS_AMOUNT',_JRPORTAL_COUPONS_AMOUNT);
		$output['HISPERCENTAGE']=jr_gettext('_JRPORTAL_COUPONS_ISPERCENTAGE',_JRPORTAL_COUPONS_ISPERCENTAGE);
		$output['HROOMONLY']=jr_gettext('_JRPORTAL_COUPONS_ROOMONLY',_JRPORTAL_COUPONS_ROOMONLY);

		$query = "SELECT `coupon_id`,`coupon_code`,`valid_from`,`valid_to`,`amount`,`is_percentage`,`rooms_only` FROM #__jomres_coupons WHERE property_uid = ".$defaultProperty;
		$result = doSelectSql($query);
		$rows=array();
		

			$rw['EDITLINK']=$jrtb;
		if (count($result)>0)
			{
			foreach ($result as $coupon)
				{
				$r=array();
				$jrtbar =jomres_getSingleton('jomres_toolbar');
				$jrtb  = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('edit',jomresURL(JOMRES_SITEPAGE_URL."&task=editCoupon&coupon_id=".$coupon->coupon_id),'');
				$jrtb .= $jrtbar->endTable();
				$r['EDITLINK']=$jrtb;
				$r['COUPONCODE']=$coupon->coupon_code;
				$r['VALIDFROM']=$coupon->valid_from;
				$r['VALIDTO']=$coupon->valid_to;
				$r['AMOUNT']=$coupon->amount;
				$r['ISPERCENTAGE']=jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO);
				if ($coupon->is_percentage)
					$r['ISPERCENTAGE']=jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES);
				$r['ROOMONLY']=jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO);
				if ($coupon->rooms_only)
					$r['ROOMONLY']=jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES);
				$rows[]=$r;
				}
			}

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('new',jomresURL(JOMRES_SITEPAGE_URL."&task=editCoupon"),'');
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL.""),'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'list_coupons.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->displayParsedTemplate();
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retval;
		}
	}
	




?>