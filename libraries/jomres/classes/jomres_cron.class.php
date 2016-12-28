<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.24
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

// Creates - adds - removes all jomres cron jobs. A pseudo cron class.
// Nice simple schedules used: M,H,D,W
class jomres_cron
{
    public function __construct($displayLog = false)
    {
        $this->config = array();
        $this->getcronconfig();
        $this->displaylog = $this->config[ 'displaylogging' ];
        $this->verboselog = $this->config[ 'verbose' ];
        $this->method = $this->config[ 'method' ];
        $this->now = time();
        $this->lastRan = 0;
        $this->allJobs = array();
        $this->allUnlockedJobs = array();
        $this->dueJobs = array();
        $this->debug = array();
        if (!function_exists('curl_init')) {
            $this->displaylog = $this->config[ 'displaylogging' ];
            $this->debug[ ] = '<b>Cannot process jobs, curl function does not exist!</b>';
        }
        $this->checkForStalledJobs(); // New for 5.1, some old jobs have been found to be locked, we need to check those and unlock any that need unlocking.
        $this->getAllJobs();
    }

    public function checkForStalledJobs()
    {
        $lockedJobs = array();
        $query = 'SELECT id,job,schedule,last_ran,parameters,locked FROM #__jomcomp_cron';
        $this->dbJobs = doSelectSql($query);

        $threashold = 60; // Assuming that no job takes longer than 60 seconds, any job that's due x + threashold must have stalled, therefore we'll unlock it.

        if (count($this->dbJobs) > 0) {
            foreach ($this->dbJobs as $job) {
                $this->allJobs[ ] = array('id' => $job->id, 'job_name' => $job->job, 'schedule' => $job->schedule, 'last_ran' => (int) $job->last_ran, 'parameters' => $job->parameters);
                if ($job->locked == '1') {
                    // In my sample db it seems that some jobs have become locked, and weren't unlocked for some reason. This change is intended to bypass that as they would remain locked forever.
                    $jobDue = false;
                    switch (trim($job->schedule)) {
                        case 'M': // Every minute
                            $nextDue = (int) $job->last_ran + 60 + $threashold;
                            if ($this->now > $nextDue) {
                                $jobDue = true;
                            }
                            break;
                        case 'QH': // Every 15 mins
                            $nextDue = (int) $job->last_ran + (60 * 15) + $threashold;
                            if ($this->now > $nextDue) {
                                $jobDue = true;
                            }
                            break;
                        case 'H': // Every hour
                            $nextDue = (int) $job->last_ran + (60 * 60) + $threashold;
                            if ($this->now > $nextDue) {
                                $jobDue = true;
                            }
                            break;
                        case 'D': // Every day
                            $nextDue = (int) $job->last_ran + (60 * 60 * 24) + $threashold;
                            if ($this->now > $nextDue) {
                                $jobDue = true;
                            }
                            break;
                        case 'W': // Every week
                        default:
                            $nextDue = (int) $job->last_ran + (60 * 60 * 24 * 7) + $threashold;
                            if ($this->now > $nextDue) {
                                $jobDue = true;
                            }
                            break;
                        }
                    if ($jobDue) {
                        $lockedJobs[] = $job->id;
                    }
                }
            }
            if (count($lockedJobs > 0)) {
                $this->unlockJobs($lockedJobs);
            }
        }
    }

    public function getcronconfig()
    {
        $this->config[ 'displaylogging' ] = '0';
        $this->config[ 'logging' ] = '0';
        $this->config[ 'verbose' ] = '0';
        $this->config[ 'method' ] = 'Minicomponent';

        $query = "SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = 0 AND plugin = 'jomcompcronjobs'";
        $settingList = doSelectSql($query);

        if (count($settingList) > 0) {
            foreach ($settingList as $s) {
                $this->config[ $s->setting ] = $s->value;
            }
        }
    }

    public function triggerJobs()
    {
        $this->now = time();
        $this->findDueJobs();
        $this->runDueJobs();
        $this->updateCronlog();
    }

    public function getAllJobs()
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

        $allJobs = array();

        if (!defined('AUTO_UPGRADE') && isset($MiniComponents->registeredClasses) && !empty($MiniComponents->registeredClasses)) {
            foreach ($MiniComponents->registeredClasses as $key => $val) {
                if (substr($key, 0, 10) == '06000cron_') {
                    $allJobs[ ] = $key;
                }
            }
        } else { // It's an upgrade, we can't rely on the $MiniComponents class being populated
            $query = 'SELECT id,job,schedule,last_ran,parameters,locked FROM #__jomcomp_cron';
            $jobsList = doSelectSql($query);

            if (!empty($jobsList)) {
                foreach ($jobsList as $job) {
                    $allJobs[ ] = '06000cron_'.$job->job;
                }
            }
        }

        if (!empty($this->dbJobs)) {
            foreach ($this->dbJobs as $job) {
                $this->allJobs[ ] = array('id' => $job->id, 'job_name' => $job->job, 'schedule' => $job->schedule, 'last_ran' => (int) $job->last_ran, 'parameters' => $job->parameters);

                if ($job->locked == '0') {
                    $this->allUnlockedJobs[ ] = array('id' => $job->id, 'job_name' => $job->job, 'schedule' => $job->schedule, 'last_ran' => (int) $job->last_ran, 'parameters' => $job->parameters);
                }
            }
        } else {
            $this->debug[ ] = '<b>No jobs in database!</b>';
        }
    }

    public function findDueJobs()
    {
        $unlockedJobs = array();
        if (count($this->allUnlockedJobs) > 0) {
            foreach ($this->allUnlockedJobs as $job) {
                $jobDue = false;
                switch (trim($job[ 'schedule' ])) {
                    case 'M': // Every minute
                        $nextDue = $job[ 'last_ran' ] + 60;
                        if ($this->now > $nextDue) {
                            $jobDue = true;
                            $this->dueJobs[ ] = $job;
                        }
                        break;
                    case 'QH': // Every 15 mins
                        $nextDue = $job[ 'last_ran' ] + (60 * 15);
                        if ($this->now > $nextDue) {
                            $jobDue = true;
                            $this->dueJobs[ ] = $job;
                        }
                        break;
                    case 'H': // Every hour
                        $nextDue = $job[ 'last_ran' ] + (60 * 60);
                        if ($this->now > $nextDue) {
                            $jobDue = true;
                            $this->dueJobs[ ] = $job;
                        }
                        break;
                    case 'D': // Every day
                        $nextDue = $job[ 'last_ran' ] + (60 * 60 * 24);
                        if ($this->now > $nextDue) {
                            $jobDue = true;
                            $this->dueJobs[ ] = $job;
                        }
                        break;
                    case 'W': // Every week
                    default:
                        $nextDue = $job[ 'last_ran' ] + (60 * 60 * 24 * 7);
                        if ($this->now > $nextDue) {
                            $jobDue = true;
                            $this->dueJobs[ ] = $job;
                        }
                        break;
                }
                if ($jobDue) {
                    $unlockedJobs[] = $job[ 'id' ];
                }

                if ($this->verboselog) {
                    $this->debug[ ] = 'Found job name '.$job[ 'job_name' ];
                    if ($jobDue) {
                        $this->debug[ ] = '<b>This job is due now.</b>';
                    }
                }
            }
            if (count($unlockedJobs > 0)) {
                $this->lockJobs($unlockedJobs);
            }
        } elseif ($this->verboselog) {
            $this->debug[ ] = 'No jobs due';
        }
    }

    public function lockJobs($jobIds)
    {
        if (count($jobIds) > 0) {
            if ($this->verboselog) {
                $this->debug[ ] = 'Locking '.count($jobIds).' jobs';
            }
            $query = 'UPDATE #__jomcomp_cron SET `locked`= 1 WHERE `id` IN ('.jomres_implode($jobIds).') ';
            if (!doInsertSql($query, '')) {
                $this->debug[ ] = 'Failed to lock jobs ';

                return false;
            }
        }

        return true;
    }

    public function unlockJobs($jobIds)
    {
        if (count($jobIds) > 0) {
            if ($this->verboselog) {
                $this->debug[ ] = 'Unlocking '.count($jobIds).' jobs';
            }
            $query = 'UPDATE #__jomcomp_cron SET `locked`= 0 WHERE `id` IN ('.jomres_implode($jobIds).') ';
            if (!doInsertSql($query, '')) {
                $this->debug[ ] = 'Failed to unlock jobs ';

                return false;
            }
        }

        return true;
    }

    // Any cron minicomponents will need to be called j06000crom_XXXXXX.class.php
    // We will use jomresConfig_secret to prevent outsiders from triggering a specific cron job remotely. The cron 6000 minicomponent can be edited to disable this check if the developer wants to run the job manually while testing
    public function runDueJobs()
    {
        $lockedJobs = array();
        if (function_exists('curl_init')) {
            $jomresConfig_secret = base64_encode(get_showtime('secret'));
            if (count($this->dueJobs) > 0) {
                $livesite = get_showtime('live_site');
                if (preg_match('/[^\x20-\x7f]/', $livesite)) {
                    require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'idna_converter'.JRDS.'idna_convert.class.php';
                    $IDN = new jomres_idna_convert();
                    $encoded = $IDN->encode($livesite);
                    $new = str_replace($livesite, $encoded, JOMRES_SITEPAGE_URL_AJAX);
                    $livesite = $new;
                } else {
                    $livesite = JOMRES_SITEPAGE_URL_AJAX;
                }

                //set the port depending on http/https
                if (strpos($livesite, 'https://') !== false) {
                    $curl_port = 443;
                } else {
                    $curl_port = 80;
                }

                foreach ($this->dueJobs as $job) {
                    if (this_cms_is_wordpress()) {
                        $request = $livesite.'&task=cron_'.$job[ 'job_name' ].'&secret='.$jomresConfig_secret;
                    } else {
                        $request = $livesite.'&task=cron_'.$job[ 'job_name' ].'&secret='.$jomresConfig_secret;
                    }

                    logging::log_message('Starting curl call to '.$request, 'Curl', 'DEBUG');
                    $logging_time_start = microtime(true);

                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_USERAGENT, 'Jomres');
                    curl_setopt($ch, CURLOPT_URL, $request);
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'XGET');
                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                    curl_setopt($ch, CURLOPT_PORT, $curl_port);
                    curl_setopt($ch, CURLOPT_TIMEOUT, 480);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/html; charset=utf-8'));
                    $curl_output = curl_exec($ch);
                    curl_close($ch);

                    $logging_time_end = microtime(true);
                    $logging_time = $logging_time_end - $logging_time_start;
                    logging::log_message('Curl call took '.$logging_time.' seconds ', 'Curl', 'DEBUG');

                    $this->debug[ ] = 'Triggered '.(string) $job[ 'job_name' ].' at '.strftime('%H:%M %d/%m/%Y', $this->now);
                    $lockedJobs[] = $job[ 'id' ];
                }
            }
        }
        if (count($lockedJobs > 0)) {
            $this->unlockJobs($lockedJobs);
            $this->updateJob_lastrans($lockedJobs);
        }
    }

    public function updateJob_lastrans($jobIds)
    {
        if (count($jobIds) > 0) {
            if ($this->verboselog) {
                $this->debug[ ] = 'Updating jobs last rans';
            }
            $query = 'UPDATE #__jomcomp_cron SET `last_ran` = '.$this->now.' WHERE `id` IN ('.jomres_implode($jobIds).')';
            if (!doInsertSql($query, '')) {
                $this->debug[ ] = 'Failed to update last ran times';

                return false;
            }
            if ($this->verboselog) {
                $this->debug[ ] = 'Updated jobs last rans';
            }
        }

        return true;
    }

    public function jobExists($jobName)
    {
        if (count($this->allJobs) == 0) {
            $this->getAllJobs();
        }
        if (count($this->allJobs) > 0) {
            foreach ($this->allJobs as $job) {
                if ($job[ 'job_name' ] == $jobName) {
                    $this->debug[ ] = 'Warning: '.(string) $job[ 'job_name' ].' already exists ';

                    return true;
                }
            }
        } else {
            return false;
        }
    }

    public function addJob($jobName, $schedule, $parameters)
    {
        if ($this->verboselog) {
            $this->debug[ ] = 'Adding '.(string) $jobName;
        }
        if (!$this->jobExists($jobName)) {
            $lastRan = 0;
            $query = "INSERT INTO #__jomcomp_cron (`job`,`schedule`,`parameters`,`last_ran`) VALUES ('".(string) $jobName."','".(string) $schedule."','".(string) $parameters."', ".(int) $lastRan.' ) ';
            if (!doInsertSql($query, '')) {
                $this->debug[ ] = 'Failed to add '.(string) $jobName;

                return false;
            }
            $this->debug[ ] = '<b>Added '.(string) $jobName.' set last_ran to '.$lastRan.'</b>';

            return true;
        } else {
            $this->debug[ ] = 'Could not add '.(string) $jobName.' as it already exists ';

            return false;
        }
    }

    public function removeJob($jobName)
    {
        if ($this->jobExists($jobName)) {
            if ($this->verboselog) {
                $this->debug[ ] = 'Removing '.(string) $jobName;
            }
            $query = "DELETE FROM #__jomcomp_cron WHERE `job` = '".(string) $jobName."' ";
            if (!doInsertSql($query, '')) {
                $this->debug[ ] = 'Failed to remove '.(string) $jobName;

                return false;
            }
            $this->debug[ ] = 'Removed '.(string) $jobName;

            return true;
        } else {
            $this->debug[ ] = 'Failed to remove '.(string) $jobName.' Does not currently exist';

            return false;
        }
    }

    public function updateJobSchedule($jobName, $schedule)
    {
        if ($this->verboselog) {
            $this->debug[ ] = 'Updating schedule for '.(string) $jobName;
        }
        if ($this->jobExists($jobName)) {
            $query = 'UPDATE #__jomcomp_cron SET `schedule` = '.(string) $schedule.' WHERE `job` = '.(string) $jobName.' ';
            if (!doInsertSql($query, '')) {
                $this->debug[ ] = 'Failed to update schedule '.(string) $jobName;

                return false;
            }
            $this->debug[ ] = 'Updated '.(string) $jobName.' set schedule to '.(string) $schedule;
        } else {
            $this->debug[ ] = 'Failed to update schedule '.(string) $jobName.' job does not currently exist';

            return false;
        }
    }

    public function updateJobParameters($jobName, $parameters)
    {
        if ($this->verboselog) {
            $this->debug[ ] = 'Updating parameters for '.(string) $jobName;
        }
        if ($this->jobExists($jobName)) {
            $query = "UPDATE #__jomcomp_cron SET `parameters` = '".(string) $parameters."' WHERE `job` = ".(string) $jobName.' ';
            if (!doInsertSql($query, '')) {
                $this->debug[ ] = 'Failed to update parameters '.(string) $jobName;

                return false;
            }
            if ($this->verboselog) {
                $this->debug[ ] = 'Updated parameters '.(string) $jobName;
            }
        } else {
            $this->debug[ ] = 'Failed to update schedule '.(string) $jobName.' job does not currently exist';

            return false;
        }
    }

    public function displayDebug()
    {
        if (count($this->debug) > 0 && $this->config[ 'displaylogging' ] == '1') {
            foreach ($this->debug as $str) {
                echo $str.'<br/>';
            }
        }
    }

    public function updateCronlog()
    {
        if (count($this->debug) > 0 && $this->config[ 'logging' ] == '1') {
            $data = strftime('%H:%M %d/%m/%Y', $this->now).'<br />';
            foreach ($this->debug as $str) {
                $data .= $str.'<br/>';
            }
            $query = "INSERT INTO #__jomcomp_cronlog (`log_details`) VALUES ('".(string) $data."') ";
            doInsertSql($query, '');
        }
    }
}
