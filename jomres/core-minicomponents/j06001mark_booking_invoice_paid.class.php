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
 * 
 #
* @package Jomres
#
 */
class j06001mark_booking_invoice_paid {
	/**
	#
	 * Constructor: 
	#
	 */
	function j06001mark_booking_invoice_paid()
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
		
		$id		= intval(jomresGetParam( $_REQUEST, 'id', 0 ));

		$property_uid=getDefaultProperty();
		$query = "SELECT contract_id FROM #__jomresportal_invoices WHERE id = ".$id." AND property_uid = ".(int)$property_uid;  // Need to associate the invoice id and the property uid. If we don't, then it could be a commission type invoice, which is not associated with a property uid and we don't want managers marking them as paid.
		$result = doSelectSql($query,1);
		if (!$result)
			{
			trigger_error ("Unable to view invoice, cannot corrolate id with property uid.", E_USER_ERROR);
			return;
			}

		if ($id == 0)
			return;

		jr_import('invoicehandler');
		$invoice_handler = new invoicehandler();
		$invoice_handler->id=$id;
		
		$invoice_handler->getInvoice();

		$invoice_handler->mark_invoice_paid();
		addBookingNote($invoice_handler->contract_id,$property_uid,jr_gettext('_JOMRES_INVOICE_MARKEDASPAID',_JOMRES_INVOICE_MARKEDASPAID,false,false));
		jomresRedirect(JOMRES_SITEPAGE_URL.'&task=view_invoice&id='.$id,"");
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE',_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE);

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