<?php
/**
#
 * Mini-component core file: Saves guest data edited by receptionist/manager
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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $database,$mrConfig,$jomresConfig_live_site,$delete,$Itemid;
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
			$query="UPDATE #__jomres_guests SET `firstname`='$firstname',`surname`='$surname',`house`='$house',`street`='$street',`town`='$town',`county`='$region',`country`='$country',`postcode`='$postcode',`tel_landline`='$landline',`tel_mobile`='$mobile',`tel_fax`='$fax',`email`='$email' WHERE guests_uid = '".(int)$guests_uid."'";
			if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_UPDATE_GUEST',_JOMRES_MR_AUDIT_UPDATE_GUEST,FALSE))) trigger_error ("Unable to update guest details, mysql db failure", E_USER_ERROR);
			}
		else
			{
			$query="INSERT INTO #__jomres_guests (`firstname`,`surname`,`house`,`street`,`town`,`county`,`country`,`postcode`,`tel_landline`,`tel_mobile`,`tel_fax`,`email`,`property_uid`)VALUES ('$firstname','$surname','$house','$street','$town','$region','$country','$postcode','$landline','$mobile','$fax','$email','".(int)$defaultProperty."')";
			if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_INSERT_GUEST',_JOMRES_MR_AUDIT_INSERT_GUEST,FALSE))) trigger_error ("Unable to insert guest details, mysql db failure", E_USER_ERROR);

			}
		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listguests&Itemid=$Itemid"), $saveMessage );
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