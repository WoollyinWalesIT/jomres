<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Delete an optional extra
 #
* @package Jomres
#
 */
class j16000paypal_settings {
	/**
	#
	 * Constructor:  Delete an optional extra
	#
	 */
	function j16000paypal_settings()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$output=array();
		$pageoutput=array();
		
		$yesno = array();
		$yesno[] = jomresHTML::makeOption( '0', _JOMRES_COM_MR_NO );
		$yesno[] = jomresHTML::makeOption( '1', _JOMRES_COM_MR_YES );
		
		$paypal_settings =jomres_getSingleton('jrportal_paypal_settings');
		
		$paypal_settings->get_paypal_settings();

		$output['PAGETITLE'] 		=_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE;
		$output['HCURRENCYCODE']	=_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE;
		$output['HSANDBOX']			=_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX;
		$output['HEMAIL']			=_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL;
		$output['NOTES']			=_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES;
		$output['HOVERRIDE']		=_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE;
		$output['HOVERRIDE_DESC']	=_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC;
		
		$output['USESANDBOX'] = jomresHTML::selectList( $yesno, 'usesandbox', 'class="inputbox" size="1"', 'value', 'text', $paypal_settings->paypalConfigOptions['usesandbox'] );
		$output['PAYPALEMAIL'] = $paypal_settings->paypalConfigOptions['email'];
		$output['CURRENCYCODE'] = $paypal_settings->paypalConfigOptions['currencycode'];
		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';
		$output['OVERRIDE'] = jomresHTML::selectList( $yesno, 'override', 'class="inputbox" size="1"', 'value', 'text', $paypal_settings->paypalConfigOptions['override'] );
		
		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','','',true,'save_paypal_settings');
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL_ADMIN),'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;
		
		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'paypal_settings.html');
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
	function getRetVals()
		{
		return null;
		}
	}
?>