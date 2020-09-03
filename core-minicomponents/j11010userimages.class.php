<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.3
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j11010userimages
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		
		$this->ret_vals = array(
								'resource_type' => 'userimages', 
								'resource_id_required' => true, 
								'name' => 'User profile images',
								'upload_root_abs_path' => JOMRES_IMAGELOCATION_ABSPATH,
								'upload_root_rel_path' => JOMRES_IMAGELOCATION_RELPATH,
								'notes' => '',
								'preview_link'=>'',
								'hidden' => true //won`t be displayed in media centre
								);
	}


	public function getRetVals()
	{
		return $this->ret_vals;
	}
}
