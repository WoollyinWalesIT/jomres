<?php
/**
* Jomres CMS Agnostic Plugin
* @author Woollyinwales IT <sales@jomres.net>
* @version Jomres 9 
* @package Jomres
* @copyright	2005-2015 Woollyinwales IT
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j02299regprop1_a_roombookings {
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}

		$this->next_step = "rental";
		$this->title = jr_gettext('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL','_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL',FALSE);
		$this->description =jr_gettext('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC','_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC',FALSE);
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL','_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTA'L);
		$output[]		=jr_gettext('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC','_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC');

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return array('next_step'=>$this->next_step,'title'=>$this->title, 'description'=>$this->description);
		}
	}
?>