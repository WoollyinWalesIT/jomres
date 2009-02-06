<?php
/**
#
 * Mini-component core file: Saves a customer type
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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $mrConfig,$jomresConfig_live_site,$Itemid;
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty=getDefaultProperty();
		$id			= intval(jomresGetParam( $_POST, 'id', "" ));
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
		if (!doInsertSql($query,$auditMessage))
			trigger_error ("Unable to create customer type, mysql db failure", E_USER_ERROR);
		else
			jomresRedirect( jomresURL("index.php?option=com_jomres&task=listCustomerTypes&Itemid=$Itemid"), $saveMessage );
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