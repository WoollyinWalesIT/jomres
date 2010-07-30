<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################


/**
#
 * Constructs and displays credit card data for the receptionist/manager
 #
* @package Jomres
#
 */
class j02230editcreditcard {
	/**
	#
	 * Constructor: Constructs and displays credit card data for the receptionist/manager
	#
	 */
	function j02230editcreditcard()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$jomresConfig_secret = get_showtime('secret');
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$defaultProperty=getDefaultProperty();
		$guestUid=jomresGetParam( $_REQUEST, 'guestUid', 0 );

		if ($guestUid)
			{
			jomres_audit("",_JOMRES_MR_AUDIT_CREDITCARD_VIEWED);
			$defaultProperty=getDefaultProperty();
			//$query="SELECT ccard_no,ccard_issued,ccard_expiry,ccard_iss_no,ccard_name FROM #__jomres_guests WHERE guests_uid = '".(int)$guestUid."' AND property_uid = '".(int)$defaultProperty."'";
			$query="SELECT
			DECODE(ccard_no, '$jomresConfig_secret') AS ccard_no,
			DECODE(ccard_issued, '$jomresConfig_secret') AS ccard_issued,
			DECODE(ccard_expiry, '$jomresConfig_secret') AS ccard_expiry,
			DECODE(ccard_iss_no, '$jomresConfig_secret') AS ccard_iss_no,
			DECODE(ccard_name, '$jomresConfig_secret') AS ccard_name,
			DECODE(ccv, '$jomresConfig_secret') AS ccv,
			DECODE(type, '$jomresConfig_secret') AS type
			FROM #__jomres_guests WHERE guests_uid = '$guestUid' and property_uid = '$defaultProperty'";
			$guestCCdata =doSelectSql($query);
			//var_dump($guestCCdata);exit;
			$jomresConfig_secret="";
			foreach($guestCCdata as $ccard)
				{
				$ccard_no=$ccard->ccard_no;
				$ccard_issued=$ccard->ccard_issued;
				$ccard_expiry=$ccard->ccard_expiry;
				$ccard_iss_no=$ccard->ccard_iss_no;
				$ccard_name=$ccard->ccard_name;
				$ccv=$ccard->ccv;
				$type=$ccard->type;
				if (!empty($ccard_no) )
					{
					$issueArray=explode("/",$ccard_issued);
					$issueMonth=$issueArray[0];
					$issueYear=$issueArray[1];
					$expiryArray=explode("/",$ccard_expiry);
					$expireMonth=$expiryArray[0];
					$expireYear=$expiryArray[1];

					}
				else
					{
					$issueMonth=date("m");
					$issueYear=date("Y");
					$expiryArray=explode("/",$ccard_expiry);
					$expireMonth=date("m");
					$expireYear=date("Y");
					}
				}
			$output['HCCARDNO']		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_CCARDNO',_JOMRES_COM_MR_DISPGUEST_CCARDNO);
			$output['HCCARDISS']		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_CCARDISS',_JOMRES_COM_MR_DISPGUEST_CCARDISS);
			$output['HCCARDEXPIRE']	=jr_gettext('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE',_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE);
			$output['HCCARISSNO']		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_CCARISSNO',_JOMRES_COM_MR_DISPGUEST_CCARISSNO);
			$output['HCCARDNAME']		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_CCARDNAME',_JOMRES_COM_MR_DISPGUEST_CCARDNAME);
			$output['HCCV']			=jr_gettext('_JOMRES_COM_MR_DISPGUEST_CCV',_JOMRES_COM_MR_DISPGUEST_CCV);
			$output['CCARDNO']		=$ccard_no;
			$output['CCARDNAME']		=$ccard_name;
			$output['CCARDTYPE']		=$type;
			$output['GUESTUID']		=$guestUid;
			if ( $jrConfig['useSSLinBookingform'] == 1)
				{
				set_showtime('live_site',str_replace("http://","https://",get_showtime('live_site')));
				}
			$output['LIVESITE']		=get_showtime('live_site');

			$iss_mon = jomresHTML::integerSelectList( 01, 12, 1, 'iss_mon', 'size="1" class="inputbox"', $issueMonth, "%02d" );
			$iss_year = jomresHTML::integerSelectList( 2005, 2020, 1, 'iss_year', 'size="1" class="inputbox"', $issueYear, "%02d" );
			$expiry_mon = jomresHTML::integerSelectList( 01, 12, 1, 'expiry_mon', 'size="1" class="inputbox"', $expireMonth, "%02d" );
			$expiry_year = jomresHTML::integerSelectList( 2005, 2020, 1, 'expiry_year', 'size="1" class="inputbox"', $expireYear, "%02d" );
			$issueno = jomresHTML::integerSelectList( 01, 100, 1, 'issueno', 'size="1" class="inputbox"', $ccard_iss_no, "%02d" );

			$output['CCARDISS']=$iss_mon.$iss_year;
			$output['CCARDEXPIRE']=$expiry_mon.$expiry_year;
			$output['CCARISSNO']=$issueno;
			$output['GUESTUID']=$guestUid;
			$output['CCV']=$ccv;

			$output['JOMRESJS']="";
			if (CMSVER == "Mambo4.6")
				$output['JOMRESJS']='<script type="text/javascript" src="'.get_showtime('live_site').'/jomres/ajax/jomres.js"></script>';

			$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';

			$jrtbar =jomres_getSingleton('jomres_toolbar');
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem('save','','',true,'saveCreditcard');
			$jrtb .= $jrtbar->toolbarItem('cancel',"javascript:window.close()",'');
			$jrtb .= $jrtbar->endTable();
			$output['JOMRESTOOLBAR']=$jrtb;

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'edit_creditcard.html');
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->displayParsedTemplate();
			}
		}

	function touch_template_language()
		{
		$output=array();
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_CCARDNO',_JOMRES_COM_MR_DISPGUEST_CCARDNO);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_CCARDISS',_JOMRES_COM_MR_DISPGUEST_CCARDISS);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE',_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_CCARISSNO',_JOMRES_COM_MR_DISPGUEST_CCARISSNO);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_CCARDNAME',_JOMRES_COM_MR_DISPGUEST_CCARDNAME);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_CCV',_JOMRES_COM_MR_DISPGUEST_CCV);

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