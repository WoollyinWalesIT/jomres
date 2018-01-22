<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.18
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000filesystem_integrity_check
{
    public function __construct($componentArgs)
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $this->retVals = '';

        $output = array();
        $pageoutput = array();

        $output[ 'INTEGRITY_CHECK' ] = jr_gettext('INTEGRITY_CHECK', 'INTEGRITY_CHECK', false);
        $output[ 'INTEGRITY_CHECK_DESC' ] = jr_gettext('INTEGRITY_CHECK_DESC', 'INTEGRITY_CHECK_DESC', false);
        $output[ 'INTEGRITY_CHECK_FILENAME' ] = jr_gettext('INTEGRITY_CHECK_FILENAME', 'INTEGRITY_CHECK_FILENAME', false);
        $output[ 'INTEGRITY_CHECK_LOCALHASH' ] = jr_gettext('INTEGRITY_CHECK_LOCALHASH', 'INTEGRITY_CHECK_LOCALHASH', false);
        $output[ 'INTEGRITY_CHECK_BUILDHASH' ] = jr_gettext('INTEGRITY_CHECK_BUILDHASH', 'INTEGRITY_CHECK_BUILDHASH', false);

        $hashes = json_decode(file_get_contents(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'hashes'));
        $files_count = count($hashes);

        for ($i = 0; $i < $files_count; ++$i) {
            if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.$hashes[$i]->filename)) {
                $local_hash = md5(file_get_contents(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.$hashes[$i]->filename));
                $hashes[$i]->local_hash = $local_hash;
                $hashes[$i]->hash_ok = true;
                $hashes[$i]->hash_class = 'alert-success';
                if ($hashes[$i]->hash != $hashes[$i]->local_hash) {
                    $hashes[$i]->hash_ok = false;
                    $hashes[$i]->hash_class = 'alert-warning';
                }
            } else {
                $hashes[$i]->hash_ok = false;
                $hashes[$i]->hash_class = 'alert-danger';
            }

            $obj = $hashes[$i];
            $arr = (array) $obj;
            $hashes[$i] = $arr;
        }

        $rows = array();
        foreach ($hashes as $hash) {
            if ($hash['hash_ok'] != true) {
                $rows[] = $hash;
            }
        }
        if (!empty($rows)) {
            $pageoutput[ ] = $output;
            $tmpl = new patTemplate();
            $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
            $tmpl->readTemplatesFromInput('filesystem_integrity_check.html');
            $tmpl->addRows('pageoutput', $pageoutput);
            $tmpl->addRows('rows', $rows);
            $tmpl->displayParsedTemplate();
        } else {
            echo '<h1>'.jr_gettext('INTEGRITY_CHECK_NOPROBLEMS', 'INTEGRITY_CHECK_NOPROBLEMS', false).'</h1>';
        }
    }

    public function getRetVals()
    {
        return $this->retVals;
    }
}
