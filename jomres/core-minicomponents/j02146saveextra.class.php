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

class j02146saveextra {
	function j02146saveextra()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$this->saveExtra();
		}

	function saveExtra()
		{
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty=getDefaultProperty();
		jr_import('jomres_cache');
		$cache = new jomres_cache();
		$cache->trashCacheForProperty($defaultProperty);
		$uid		= intval(jomresGetParam( $_POST, 'uid', "" ));
		$desc       = jomresGetParam( $_POST, 'desc', "" );
		$name       = jomresGetParam( $_POST, 'name', "" );
		$price      = jomresGetParam( $_POST, 'price', '' );
		$price=str_replace(",","",$price);
		$maxquantity      = jomresGetParam( $_POST, 'maxquantity', 1 );
		if ($maxquantity < 1 || $maxquantity > 1000)
			$maxquantity = 1;
		$mindays		= jomresGetParam( $_POST, 'mindays', 1 );
		$tax_rate		= jomresGetParam( $_POST, 'taxrate', 0 );
		$extramodel		= jomresGetParam( $_POST, 'extramodel', array() );
		$force			= jomresGetParam( $_POST, 'force', array() );

		$model=$extramodel[0];
		$m=$model-1;
		$f=$force[$m];
		$chargeabledaily = intval(jomresGetParam( $_POST, 'chargabledaily', 0 ));
		$saveMessage=jr_gettext('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED',_JOMRES_COM_MR_EXTRA_SAVE_UPDATED,FALSE);
		if ($uid=="")
			{
			$auditMessage=jr_gettext('_JOMRES_MR_AUDIT_INSERT_EXTRA',_JOMRES_MR_AUDIT_INSERT_EXTRA,FALSE);
			$query="INSERT INTO #__jomres_extras (`name`,`desc`,`price`,`tax_rate`,`maxquantity`,`chargabledaily`,`property_uid`)VALUES('$name','$desc','".(float)$price."',".(int)$tax_rate.", '".(int)$maxquantity."','".(int)$chargeabledaily."','".(int)$defaultProperty."')";
			$uid=doInsertSql($query,$auditMessage);
			}
		else
			{
			$auditMessage=jr_gettext('_JOMRES_MR_AUDIT_UPDATE_EXTRA',_JOMRES_MR_AUDIT_UPDATE_EXTRA,FALSE);
			$query="UPDATE #__jomres_extras SET `name`='$name',`desc`='$desc',`maxquantity`=".(int)$maxquantity.",`price`='".(float)$price."',`tax_rate`=".(int)$tax_rate." ,`chargabledaily`='".(int)$chargeabledaily."' WHERE uid = '".(int)$uid."' AND property_uid='".(int)$defaultProperty."'";
			doInsertSql($query,$auditMessage);
			}
		$jomres_messaging =jomres_getSingleton('jomres_messages');
		$jomres_messaging->set_message($auditMessage);

		$model=$extramodel[0];
		$query="DELETE FROM #__jomcomp_extrasmodels_models WHERE extra_id = '".(int)$uid."'";
		doInsertSql($query,'');
		$query="INSERT INTO #__jomcomp_extrasmodels_models (`extra_id`,`model`,`params`,`force`,`property_uid`) VALUES ('".(int)$uid."','$model','".(int)$mindays."','".(int)$f."','".(int)$defaultProperty."')";
		doInsertSql($query,'');

		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listExtras"), $saveMessage );
		}
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>