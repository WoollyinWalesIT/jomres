<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.4
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000save_template_override
{
    public function __construct()
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
		
		$template_overrides = jomres_singleton_abstract::getInstance('template_overrides');
		
        $template_name			= (string) jomresGetParam($_POST, 'template_name', '');
		$template_path			= (string) jomresGetParam($_POST, 'template_path', '');
		
		$template_overrides->template_overrides[$template_name]['template_name']	= $template_name;
		$template_overrides->template_overrides[$template_name]['path']				= addslashes($template_path);

		$template_overrides->save_template_override($template_name);
		
		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_template_overrides'), '');
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
