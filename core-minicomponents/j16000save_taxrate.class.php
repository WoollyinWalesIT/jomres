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

class j16000save_taxrate {
	function j16000save_taxrate()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$id				= intval(jomresGetParam( $_POST, 'id', 0 ));
		$code			= jomresGetParam( $_POST, 'code', "" );
		$description	= jomresGetParam( $_POST, 'description', "" );
		$rate_val		= jomresGetParam( $_POST, 'rate', 0.00 );
		
		jr_import('jrportal_taxrate');
		$rate = new jrportal_taxrate();
		if ($id > 0)
			{
			$rate->id = $id;
			}
		$rate->code=$code;
		$rate->description=$description;
		$rate->rate=$rate_val;
		
		if ($id > 0)
			$rate->commitUpdateTaxRate();
		else
			$rate->commitTaxRate();
		//echo $rate->error;
		
		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL_ADMIN."&task=list_taxrates"), "" );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>