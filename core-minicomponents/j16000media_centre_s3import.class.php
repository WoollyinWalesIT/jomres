<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.9
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000media_centre_s3import
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
		
		$force = (int)jomresGetParam($_REQUEST, 'force', 0);
		
		//preliminary checks
		if (
			$jrConfig['images_imported_to_db'] == '0' ||
			$jrConfig['amazon_s3_active'] != '1' || 
			$jrConfig['amazon_s3_bucket'] == '' || 
			$jrConfig['amazon_s3_key'] == '' ||
			$jrConfig['amazon_s3_secret'] == ''
			) {
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN), '');
		}

		if ($jrConfig['images_imported_to_s3'] != '0' && !$force) {
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN), '');
		}
		
		//set max execution time. If not possible, don`t run the import because most probably it will time out
		try {
			ini_set('max_execution_time', '0');
		} 
		catch (Exception $e) {
			echo '
			<div class="alert alert-error alert-danger">
				<h4 class="alert-heading">ERROR</h4>
				<p>Error: Can`t set max_execution_time to 0, importing existing images will probably time out. Please import them manually by copying the entire /jomres/uploadedimages dir to your Amazon S3 bucket.</p>
			</div>
			';
			return;
		}
		
		jr_import('jomres_media_centre_images_s3import');
		$jomres_media_centre_images_s3import = new jomres_media_centre_images_s3import();

        if (!using_bootstrap()) {
            if (!$jomres_media_centre_images_s3import->run()) {
                echo 'Error: Could not import images to Aamazon S3 bucket.';
            } else {
                echo 'Images imported successfully to Amazon S3 bucket.';
            }
        } else {
            if (!$jomres_media_centre_images_s3import->run()) {
                echo '
				<div class="alert alert-error alert-danger">
					<h4 class="alert-heading">ERROR</h4>
					<p>Error: Could not import images to Aamazon S3 bucket.</p>
				</div>
				';
            } else {
				//mark as imported
				$siteConfig->update_setting('images_imported_to_s3','1');

                echo '
				<div class="alert alert-success">
					<h4 class="alert-heading">Congratulations!</h4>
					<p>Images imported successfully to Amazon S3 bucket.</p>
				</div>
				';
            }
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
