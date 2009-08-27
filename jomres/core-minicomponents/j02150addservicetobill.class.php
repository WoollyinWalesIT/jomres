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
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$mrConfig=getPropertySpecificSettings();
		$saveMessage=_JOMRES_COM_ADDSERVICE_SAVEMESSAGE;

		$contract_uid	=	jomresGetParam( $_REQUEST, 'contract_uid', 0 );

		if (!isset($_POST['service_description']) )
			{
			$output['PAGETITLE']=jr_gettext('_JOMRES_COM_ADDSERVICE_TITLE',_JOMRES_COM_ADDSERVICE_TITLE);

			$output['HSERVICEDESCRIPTION']=jr_gettext('_JOMRES_COM_ADDSERVICE_DESCRIPTION',_JOMRES_COM_ADDSERVICE_DESCRIPTION);
			$output['HSERVICEVALUE']=jr_gettext('_JOMRES_COM_ADDSERVICE_VALUE',_JOMRES_COM_ADDSERVICE_VALUE);
			$output['CURRENCY']=$mrConfig['currency'];
			$output['CONTRACTUID']=$contract_uid;

			$jrtbar =jomres_getSingleton('jomres_toolbar');
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem('save','','',true,'addServiceToBill');
			$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&task=editBooking&contract_uid=$contract_uid"),'');
			$jrtb .= $jrtbar->endTable();
			$output['JOMRESTOOLBAR']=$jrtb;

			$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';

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
					jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=editBooking&contract_uid=$contract_uid"), $saveMessage );
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