<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.19
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000obsolete_files_check
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $obsolete_dirs_output = '';
		$obsolete_files_output = '';
		
		jr_import('jomres_obsolete_file_handling');
        $obsolete_files = new jomres_obsolete_file_handling();
		
		if (empty($obsolete_files->obs_directories) && empty($obsolete_files->obs_files)) {
			echo '
<div class="alert alert-success">
	<h3>Congratulations! No problems detected.</h3>
	<p>There are no obsolete files or directories to be deleted.</p>
</div>';
		}
		
		if (!empty($obsolete_files->obs_directories) || !empty($obsolete_files->obs_files)) {
			foreach ($obsolete_files->obs_directories as $k) {
				$obsolete_dirs_output .= $k.'<br>';
			}
			
			foreach ($obsolete_files->obs_files as $k) {
				$obsolete_files_output .= $k.'<br>';
			}
			
			echo '
<div class="alert alert-warning">
	<h3>WARNING: Obsolete files/directories are still present.</h3>
	<p>These files/directories are not needed anymore and keeping them can cause problems. Please click the button below to remove them.</p>
	<p>'
	.$obsolete_dirs_output.$obsolete_files_output.
	'</p>
	<a href="'.jomresUrl(JOMRES_SITEPAGE_URL_ADMIN.'&task=delete_obsolete_files').'" class="btn btn-warning">Remove obsolete files and directories</a>
</div>';
		}
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
