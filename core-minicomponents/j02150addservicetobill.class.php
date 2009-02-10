<?php
/**
#
 * Mini-component core file: Constructs and displays services added to a guest's bill. Saves same.
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
 * Add a service the the bill of a guest with a booking
 #
* @package Jomres
#
 */
class j02150addservicetobill {
	/**
	#
	 * Constructor: Add a service the the bill of a guest with a booking
	#
	 */
	function j02150addservicetobill()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $contract_uid,$mrConfig,$jomresConfig_live_site,$Itemid;
		$saveMessage=_JOMRES_COM_ADDSERVICE_SAVEMESSAGE;

		$contract_uid	=	jomresGetParam( $_REQUEST, 'contract_uid', 0 );

		if (!isset($_POST['service_description']) )
			{
			$output['PAGETITLE']=jr_gettext('_JOMRES_COM_ADDSERVICE_TITLE',_JOMRES_COM_ADDSERVICE_TITLE);
			$output['ITEMID']=$Itemid;

			$output['HSERVICEDESCRIPTION']=jr_gettext('_JOMRES_COM_ADDSERVICE_DESCRIPTION',_JOMRES_COM_ADDSERVICE_DESCRIPTION);
			$output['HSERVICEVALUE']=jr_gettext('_JOMRES_COM_ADDSERVICE_VALUE',_JOMRES_COM_ADDSERVICE_VALUE);
			$output['CURRENCY']=$mrConfig['currency'];
			$output['CONTRACTUID']=$contract_uid;

			$jrtbar = new jomres_toolbar();
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem('save','','',true,'addServiceToBill');
			$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&task=editBooking&contract_uid=$contract_uid&Itemid=$Itemid"),'');
			$jrtb .= $jrtbar->endTable();
			$output['JOMRESTOOLBAR']=$jrtb;

			$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1">';

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'add_service_to_bill.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->displayParsedTemplate();
			}
		else
			{
			if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
			$contract_uid			=	jomresGetParam( $_POST, 'contract_uid', 0 );
			$service_description	=	ucfirst(jomresGetParam( $_POST, 'service_description', '' ));
			$service_value			=	jomresGetParam( $_POST, 'service_value', 0.00 );
			if ($contract_uid && $service_description && $service_value != 0)
				{
				$query="INSERT INTO #__jomres_extraServices (`service_description`,`service_value`,`contract_uid`) VALUES ('$service_description','".(float)$service_value."','".(int)$contract_uid."')";
				if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_ADDSERVICE',_JOMRES_MR_AUDIT_ADDSERVICE,FALSE)))
					trigger_error ("Unable to insert into extraServices table, mysql db failure", E_USER_ERROR);
				else
					jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=editBooking&contract_uid=$contract_uid&Itemid=$Itemid"), $saveMessage );
				}
			else
				{
				echo "Ooops, no description or value entered. ";
				trigger_error ("Adding service to bill, either  description or value not entered", E_USER_ERROR);
				}
			}
		}


	function touch_template_language()
		{
		$output=array();
		$output[]		=jr_gettext('_JOMRES_COM_ADDSERVICE_TITLE',_JOMRES_COM_ADDSERVICE_TITLE);
		$output[]		=jr_gettext('_JOMRES_COM_ADDSERVICE_DESCRIPTION',_JOMRES_COM_ADDSERVICE_DESCRIPTION);
		$output[]		=jr_gettext('_JOMRES_COM_ADDSERVICE_VALUE',_JOMRES_COM_ADDSERVICE_VALUE);
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