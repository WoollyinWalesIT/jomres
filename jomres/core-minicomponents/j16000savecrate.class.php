<?php
/**
#
 * Mini-component core file:
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

class j16000savecrate
	{
	function j16000savecrate()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $indexphp;
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$id 				= jomresGetParam( $_REQUEST, 'id',	0 );
		$title 				= jomresGetParam( $_REQUEST, 'title','' );
		$type 				= jomresGetParam( $_REQUEST, 'type',0 );
		$value 				= jomresGetParam( $_REQUEST, 'value',0.00 );
		$currencycode 		= jomresGetParam( $_REQUEST, 'currencycode','' );

		$crateObj=new jrportal_crate();
		$crateObj->id=$id;
		if ($id>0)
			$crateObj->getCrate();
		$crateObj->title=$title;
		$crateObj->type=$type;
		$crateObj->value=$value;
		$crateObj->currencycode=$currencycode;
		$tr= new jrportal_transaction();
		if ($id>0)
			$crateObj->commitUpdateCrate(&$tr);
		else
			$crateObj->commitNewCrate(&$tr);
		$result=$tr->commit($tr);
		if ($result)
			jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=listcrates", '');
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}