<?php
/**
 * Database querying functions
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
*
* Performs SELECT queries
*
* If passed, mode 1 expects 1 row with 1 element in it. Returns a string. mode 2 The calling function expects 1 row with elements in it. Returns an associative array
*
*/
function doSelectSql($query, $mode = false)
{
    $jomres_db = jomres_singleton_abstract::getInstance('jomres_database');
    $jomres_db->setQuery($query);
    $jomres_db->loadObjectList();

    $num = count($jomres_db->result);

    switch ($mode) {
        case 1:
            // Mode 1. The calling function expects 1 row with 1 element in it. Returns a string
            if ($num == 1) {
                foreach ($jomres_db->result[0] as $r) {
                    $result = $r;
                }

                return $result;
            } else {
                return false;
            }
            break;
        case 2:
            // Mode 2. The calling function expects 1 row with elements in it. Returns an associative array
            if ($num > 1) {
                throw new Exception('Database error more than one result returned. One expected. Stop.');
            }

            if ($num == 1) {
                if (empty($jomres_db->result[0])) {
                    return false;
                } else {
                    foreach ($jomres_db->result[0] as $k => $v) {
                        $result[ $k ] = $v;
                    }

                    return $result;
                }
            } else {
                return false;
            }
            break;
        default:
            return $jomres_db->result;
            break;
        }
}

/**
*
* Performs INSERT/UPDATE/DELETE queries
*
* Called doInsertSql, the title is not quite correct as this function also handles updates and deletes.
* We'll use the lack of text in $op as a way of indicating that we don't want this operation logged.
* This way we can call the audit directly from the insert internet booking function rather than logging EVERYTHING that's done by the function
*
*/
function doInsertSql($query, $op = '', $ignoreErrors = false)
{
    $jomres_db = jomres_singleton_abstract::getInstance('jomres_database');
    $jomres_db->setQuery($query);

    if (!$jomres_db->query()) {
        if (!$ignoreErrors) {
            error_logging('Do insert failed :: '.$jomres_db->error.' '.$query);
        }

        return false;
    } else {
        $thisID = $jomres_db->last_id;

        if ($op != '') {
            jomres_audit($query, $op);
        }

        if ($thisID) {
            return $thisID;
        } else {
            return true;
        }
    }
}

function doDBClose()
{
    $jomres_db = jomres_singleton_abstract::getInstance('jomres_database');
    $jomres_db->close();
}
