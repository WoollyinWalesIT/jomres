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

class j16000archivecrates
	{
	function j16000archivecrates()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $indexphp;
		$idArray = jomresGetParam( $_REQUEST, 'idarray',array() );
		$crateFunctions=new jrportal_crate_functions();
		if (count($idArray)>0)
			{
			$tr= new jrportal_transaction();
			$crateFunctions->batchArchive($idArray,&$tr);
			$result=$tr->commit($tr);
			if ($result)
				jomresRedirect( $indexphp."?option=com_jomres&task=listcrates", '');
			}
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}