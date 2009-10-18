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
 * Saves guest data edited by receptionist/manager
 #
* @package Jomres
#
 */
class j02224saveguest {
	/**
	#
	 * Constructor: Saves guest data edited by receptionist/manager
	#
	 */
	function j02224saveguest()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$guests_uid=jomresGetParam( $_REQUEST, 'guestUid', 0 );
		if ($guests_uid=="0")
			$guests_uid=FALSE;
		$defaultProperty=getDefaultProperty();

		$firstname	=jomresGetParam( $_REQUEST, 'firstname',"" );
		$surname	=jomresGetParam( $_REQUEST, 'surname',"" );
		$house		=jomresGetParam( $_REQUEST, 'house',"" );
		$street		=jomresGetParam( $_REQUEST, 'street',"" );
		$town		=jomresGetParam( $_REQUEST, 'town',"" );
		$region		=jomresGetParam( $_REQUEST, 'region',"" );
		$country	=jomresGetParam( $_REQUEST, 'guest_country',"" );
		$postcode	=jomresGetParam( $_REQUEST, 'postcode',"" );
		$landline	=jomresGetParam( $_REQUEST, 'landline',"" );
		$mobile		=jomresGetParam( $_REQUEST, 'mobile',"" );
		$fax		=jomresGetParam( $_REQUEST, 'fax',"" );
		$email		=jomresGetParam( $_REQUEST, 'email',"" );

		if ($guests_uid != 0)
			{
			$jomres_messaging =jomres_getSingleton('jomres_messages');
			$jomres_messaging->set_message(jr_gettext('_JOMRES_MR_AUDIT_UPDATE_GUEST',_JOMRES_MR_AUDIT_UPDATE_GUEST,FALSE));
			$query="UPDATE #__jomres_guests SET `firstname`='$firstname',`surname`='$surname',`house`='$house',`street`='$street',`town`='$town',`county`='$region',`country`='$country',`postcode`='$postcode',`tel_landline`='$landline',`tel_mobile`='$mobile',`tel_fax`='$fax',`email`='$email' WHERE guests_uid = '".(int)$guests_uid."'";
			if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_UPDATE_GUEST',_JOMRES_MR_AUDIT_UPDATE_GUEST,FALSE))) trigger_error ("Unable to update guest details, mysql db failure", E_USER_ERROR);
			}
		else
			{
			$jomres_messaging =jomres_getSingleton('jomres_messages');
			$jomres_messaging->set_message(jr_gettext('_JOMRES_MR_AUDIT_INSERT_GUEST',_JOMRES_MR_AUDIT_INSERT_GUEST,FALSE));
			$query="INSERT INTO #__jomres_guests (`firstname`,`surname`,`house`,`street`,`town`,`county`,`country`,`postcode`,`tel_landline`,`tel_mobile`,`tel_fax`,`email`,`property_uid`)VALUES ('$firstname','$surname','$house','$street','$town','$region','$country','$postcode','$landline','$mobile','$fax','$email','".(int)$defaultProperty."')";
			if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_INSERT_GUEST',_JOMRES_MR_AUDIT_INSERT_GUEST,FALSE))) trigger_error ("Unable to insert guest details, mysql db failure", E_USER_ERROR);

			}
		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listguests"));
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