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

class j02146saveextra {
	function j02146saveextra()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
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
			$query="INSERT INTO #__jomres_extras (`name`,`desc`,`price`,`maxquantity`,`chargabledaily`,`property_uid`)VALUES('$name','$desc','".(float)$price."','".(int)$maxquantity."','".(int)$chargeabledaily."','".(int)$defaultProperty."')";
			$uid=doInsertSql($query,$auditMessage);
			}
		else
			{
			$auditMessage=jr_gettext('_JOMRES_MR_AUDIT_UPDATE_EXTRA',_JOMRES_MR_AUDIT_UPDATE_EXTRA,FALSE);
			$query="UPDATE #__jomres_extras SET `name`='$name',`desc`='$desc',`maxquantity`=".(int)$maxquantity.",`price`='".(float)$price."',`chargabledaily`='".(int)$chargeabledaily."' WHERE uid = '".(int)$uid."' AND property_uid='".(int)$defaultProperty."'";
			doInsertSql($query,$auditMessage);
			}

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