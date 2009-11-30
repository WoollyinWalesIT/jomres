<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * Save a customer type
 #
* @package Jomres
#
 */
class j02118savecustomertype {
	/**
	#
	 * Constructor: Save a customer type
	#
	 */
	function j02118savecustomertype()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
			
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty=getDefaultProperty();
		$id			= intval(jomresGetParam( $_POST, 'typeid', "" ));
		$type       = getEscaped( jomresGetParam( $_POST, 'type', "" ) );
		$notes      = getEscaped( jomresGetParam( $_POST, 'notes', "" ) );
		$maximum	= getEscaped( jomresGetParam( $_POST, 'maximum', "" ) );
		$is_percentage = getEscaped( jomresGetParam( $_POST, 'is_percentage', "" ) );
		$posneg     = getEscaped( jomresGetParam( $_POST, 'posneg', "" ) );
		$variance   = jomresGetParam( $_POST, 'variance', 0.0 );

		$saveMessage=jr_gettext('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED',_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED,FALSE);
		if ($id=="")
			{
			$auditMessage=jr_gettext('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE',_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE,FALSE);
			$query="INSERT INTO #__jomres_customertypes (`type`,`notes`,`maximum`,`is_percentage`,`posneg`,`variance`,`property_uid`)VALUES('$type','$notes','".(int)$maximum."','".(int)$is_percentage."','".(int)$posneg."','$variance','".(int)$defaultProperty."')";
			}
		else
			{
			$auditMessage=jr_gettext('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE',_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE,FALSE);
			$query="UPDATE #__jomres_customertypes SET `type`='$type',`notes`='$notes',`maximum`='".(int)$maximum."',`is_percentage`='".(int)$is_percentage."',`posneg`='$posneg',`variance`='$variance' WHERE id = '$id' AND property_uid='$defaultProperty'";
			}
		
		$jomres_messaging =jomres_getSingleton('jomres_messages');
		//$jomres_messaging = new jomres_messages();
		$jomres_messaging->set_message($saveMessage);
		
		if (!doInsertSql($query,$auditMessage))
			trigger_error ("Unable to create customer type, mysql db failure", E_USER_ERROR);
		else
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listCustomerTypes"), $saveMessage );
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