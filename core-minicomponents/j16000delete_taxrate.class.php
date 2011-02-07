<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Delete an optional extra
 #
* @package Jomres
#
 */
class j16000delete_taxrate {
	/**
	#
	 * Constructor:  Delete an optional extra
	#
	 */
	function j16000delete_taxrate()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$id=jomresGetParam( $_REQUEST, 'id', 0 );
		if ($id>1)
			{
			jr_import('jrportal_taxrate');
			$rate = new jrportal_taxrate();
			if ($id > 0)
				{
				$rate->id = $id;
				}
			$rate->deleteTaxRate();
			jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=list_taxrates", $saveMessage );
			}
		else
			echo _JRPORTAL_TAXRATES_CANNOTDELETE;
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
		return null;
		}
	}
?>