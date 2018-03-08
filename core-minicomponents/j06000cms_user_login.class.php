<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-alpha1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000cms_user_login
{
    public function __construct($componentArgs)
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
		
		$login_url = get_showtime('live_site').'/'.jomres_cmsspecific_getlogin_task();
		
		//simply redirect to the cms user registraation page
		jomresRedirect($login_url, '');
        
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
