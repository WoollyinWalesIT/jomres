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
 * Insert some data into the property header
 #
* @package Jomres
#
 */
 // First let's create our class name. The class name should be the same as the file name, eg this file name is called j01070atest.class.php, so this class MUST be called j01070atest
class j05019dobooking_deposit
	{
	/**
	#
	 * Constructor: Let's gather the data we want.
	#
	 */
	function j05019dobooking_deposit()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global  $tmpBookingHandler, $thisJRUser;


		if (!$thisJRUser->userIsManager)
			return;

		if ( !isset($tmpBookingHandler->tmpbooking["amend_contract"]) )
			return;

		if ($tmpBookingHandler->tmpbooking["amend_contract"] == 0)
			return;

		$newTask			= "handlereq_deposit";
		$inputName			= "overdeposit";
		$defaultValue		= "";
		if (isset($tmpBookingHandler->tmpbooking["override_contract_deposit"]) && ($tmpBookingHandler->tmpbooking["override_contract_deposit"] != "") )
			{
			$currfmt 		= new jomres_currency_format();
			$defaultValue	= $currfmt->get_formatted($tmpBookingHandler->tmpbooking["override_contract_deposit"]);
			}

		$bookingFormInsert['DEPOSIT_HEADER']	= jr_gettext('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT',_JOMCOMP_AMEND_OVERRIDE_DEPOSIT,false);
		$bookingFormInsert['DEPOSIT_INPUT']		= '<input class="inputbox" size="12" type="text" id="'.$inputName.'" value="'.$defaultValue.'" onChange="jomresAjax_'.$newTask.'(this.value)">';
		$bookingFormInsert['DEPOSIT_AJAXSTRING']=
			'<script>
			jQuery(document).ready(function() {
				/**
				 * We show a simple loading indicator
				 * using the jQuery ajax events
				 */
				});

			function jomresAjax_'.$newTask.'(value){
				var params = {
				option: "com_jomres",
				task: "'.$newTask.'",
				no_html: "1",
				'.$inputName.': value
				};
				var tosend = value;
				jQuery.ajax({
				type: "GET",
				url: "index2.php",
				async: false,
				data: params,
				dataType: "script"
				})
				};
			</script>';

		$this->returnValue		= $bookingFormInsert;
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT',_JOMCOMP_AMEND_OVERRIDE_DEPOSIT);

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
	function getRetVals()
		{
		return $this->returnValue;
		}
	}
?>