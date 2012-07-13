<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
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
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
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
		$discount	=(int)jomresGetParam( $_REQUEST, 'discount',0 );

		if ($guests_uid != 0)
			{
			$jomres_messaging =jomres_singleton_abstract::getInstance('jomres_messages');
			$jomres_messaging->set_message(jr_gettext('_JOMRES_MR_AUDIT_UPDATE_GUEST',_JOMRES_MR_AUDIT_UPDATE_GUEST,FALSE));
			$query="UPDATE #__jomres_guests SET `firstname`='$firstname',`surname`='$surname',`house`='$house',`street`='$street',`town`='$town',`county`='$region',`country`='$country',`postcode`='$postcode',`tel_landline`='$landline',`tel_mobile`='$mobile',`tel_fax`='$fax',`email`='$email',`discount`= $discount WHERE guests_uid = '".(int)$guests_uid."' AND `property_uid` = ".(int)$defaultProperty;
			if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_UPDATE_GUEST',_JOMRES_MR_AUDIT_UPDATE_GUEST,FALSE))) trigger_error ("Unable to update guest details, mysql db failure", E_USER_ERROR);
			}
		else
			{
			$jomres_messaging =jomres_singleton_abstract::getInstance('jomres_messages');
			$jomres_messaging->set_message(jr_gettext('_JOMRES_MR_AUDIT_INSERT_GUEST',_JOMRES_MR_AUDIT_INSERT_GUEST,FALSE));
			$query="INSERT INTO #__jomres_guests (`firstname`,`surname`,`house`,`street`,`town`,`county`,`country`,`postcode`,`tel_landline`,`tel_mobile`,`tel_fax`,`email`,`discount`,`property_uid`)VALUES ('$firstname','$surname','$house','$street','$town','$region','$country','$postcode','$landline','$mobile','$fax','$email',$discount,'".(int)$defaultProperty."')";
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