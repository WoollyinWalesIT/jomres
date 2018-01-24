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

// Creates - adds - removes all jomres cron jobs. A pseudo cron class.
// Nice simple schedules used: M,H,D,W,QH
class jomres_cron
{
    public function __construct()
    {
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        $this->method = $jrConfig[ 'cron_method' ];
        $this->now = time();
        $this->lastRan = 0;
        $this->allJobs = array();
        $this->allUnlockedJobs = array();
        $this->dueJobs = array();
        $this->debug = array();
		$this->displaylog = false;
        
		$this->checkForStalledJobs(); // New for 5.1, some old jobs have been found to be locked, we need to check those and unlock any that need unlocking.
        
		$this->getAllJobs();
    }

    public function checkForStalledJobs()
    {
        $lockedJobs = array();
        
		$query = 'SELECT `id`, `job`, `schedule`, `last_ran`, `parameters`, `locked` FROM #__jomcomp_cron';
        $this->dbJobs = doSelectSql($query);

        $threashold = 60; // Assuming that no job takes longer than 60 seconds, any job that's due x + threashold must have stalled, therefore we'll unlock it.

        if (!empty($this->dbJobs)) {
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
            if (!empty($lockedJobs)) {
                $this->unlockJobs($lockedJobs);
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
            foreach ($MiniComponents->registeredClasses['06000'] as $key => $val) {
                if (substr($key, 0, 5) == 'cron_') {
                    $allJobs[ ] = $key;
                }
            }
        } else { // It's an upgrade, we can't rely on the $MiniComponents class being populated
            $query = 'SELECT `id`, `job`, `schedule`, `last_ran`, `parameters`, `locked` FROM #__jomcomp_cron';
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
        
		if (!empty($this->allUnlockedJobs)) {
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

                $this->debug[ ] = 'Found job name '.$job[ 'job_name' ];
				if ($jobDue) {
					$this->debug[ ] = '<b>This job is due now.</b>';
				}
            }
            if (!empty($unlockedJobs)) {
                $this->lockJobs($unlockedJobs);
            }
        } else {
            $this->debug[ ] = 'No jobs due';
        }
    }

    public function lockJobs($jobIds = array())
    {
        if (!empty($jobIds)) {
            $this->debug[ ] = 'Locking '.count($jobIds).' jobs';

            $query = 'UPDATE #__jomcomp_cron SET `locked` = 1 WHERE `id` IN ('.jomres_implode($jobIds).') ';
            if (!doInsertSql($query, '')) {
                $this->debug[ ] = 'Failed to lock jobs ';

                return false;
            }
        }

        return true;
    }

    public function unlockJobs($jobIds = array())
    {
        if (!empty($jobIds)) {
			$this->debug[ ] = 'Unlocking '.count($jobIds).' jobs';

            $query = 'UPDATE #__jomcomp_cron SET `locked` = 0 WHERE `id` IN ('.jomres_implode($jobIds).') ';
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

		$jomresConfig_secret = base64_encode(get_showtime('secret'));
		
		if (!empty($this->dueJobs)) {
			$livesite = get_showtime('live_site');
			
			//handle domain names that contain non-latin chars
			if (preg_match('/[^\x20-\x7f]/', $livesite)) {
				//require_once JOMRES_LIBRARIES_ABSPATH.'idna_converter'.JRDS.'idna_convert.class.php';
				$IDN = new Mso\IdnaConvert\IdnaConvert();
				$encoded = $IDN->encode($livesite);
				$new = str_replace($livesite, $encoded, JOMRES_SITEPAGE_URL_AJAX);
				$livesite = $new;
			} else {
				$livesite = JOMRES_SITEPAGE_URL_AJAX;
			}

			//run each job
			foreach ($this->dueJobs as $job) {
				if (this_cms_is_wordpress()) {
					$url = $livesite.'&task=cron_'.$job[ 'job_name' ].'&secret='.$jomresConfig_secret;
				} else {
					$url = $livesite.'&task=cron_'.$job[ 'job_name' ].'&secret='.$jomresConfig_secret;
				}

				jomres_async_request("GET", $url, 0, array());

				$this->debug[ ] = 'Triggered '.(string) $job[ 'job_name' ].' at '.strftime('%H:%M %d/%m/%Y', $this->now);
				$lockedJobs[] = $job[ 'id' ];
			}
        }
        
		if (!empty($lockedJobs)) {
            $this->unlockJobs($lockedJobs);
            $this->updateJob_lastrans($lockedJobs);
        }
    }

    public function updateJob_lastrans($jobIds = array())
    {
        if (!empty($jobIds)) {
			$this->debug[ ] = 'Updating jobs last rans';

            $query = 'UPDATE #__jomcomp_cron SET `last_ran` = '.$this->now.' WHERE `id` IN ('.jomres_implode($jobIds).')';
            if (!doInsertSql($query, '')) {
                $this->debug[ ] = 'Failed to update last ran times';

                return false;
            }
            
			$this->debug[ ] = 'Updated jobs last rans';
			
			return true;
        }

        return false;
    }

    public function jobExists($jobName = '')
    {
		if ($jobName == '') {
			return true; //we`ll return true here as if the job exists
		}

        if (empty($this->allJobs)) {
            $this->getAllJobs();
        }
        
		if (!empty($this->allJobs)) {
            foreach ($this->allJobs as $job) {
                if ($job[ 'job_name' ] == $jobName) {
                    $this->debug[ ] = 'Warning: '.(string) $job[ 'job_name' ].' already exists ';

                    return true;
                }
            }
        }
		
		return false;
    }

    public function addJob($jobName = '', $schedule = 'D', $parameters = '')
    {
        $this->debug[ ] = 'Adding '.(string) $jobName;

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
		
		return false;
    }

    public function removeJob($jobName = '')
    {
		if ($jobName == '') {
			return false; //we`ll return false here as if the job removal failed
		}

        if ($this->jobExists($jobName)) {
            $this->debug[ ] = 'Removing '.(string) $jobName;

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
		
		return false;
    }

    public function updateJobSchedule($jobName, $schedule)
    {
        $this->debug[ ] = 'Updating schedule for '.(string) $jobName;

        if ($this->jobExists($jobName)) {
            $query = 'UPDATE #__jomcomp_cron SET `schedule` = '.(string) $schedule.' WHERE `job` = '.(string) $jobName.' ';
            if (!doInsertSql($query, '')) {
                $this->debug[ ] = 'Failed to update schedule '.(string) $jobName;

                return false;
            }
            
			$this->debug[ ] = 'Updated '.(string) $jobName.' set schedule to '.(string) $schedule;
			
			return true;
        } else {
            $this->debug[ ] = 'Failed to update schedule '.(string) $jobName.' job does not currently exist';

            return false;
        }
		
		return false;
    }

    public function updateJobParameters($jobName, $parameters)
    {
        $this->debug[ ] = 'Updating parameters for '.(string) $jobName;

        if ($this->jobExists($jobName)) {
            $query = "UPDATE #__jomcomp_cron SET `parameters` = '".(string) $parameters."' WHERE `job` = ".(string) $jobName.' ';
            if (!doInsertSql($query, '')) {
                $this->debug[ ] = 'Failed to update parameters '.(string) $jobName;

                return false;
            }
            
			$this->debug[ ] = 'Updated parameters '.(string) $jobName;
			
			return true;
        } else {
            $this->debug[ ] = 'Failed to update schedule '.(string) $jobName.' job does not currently exist';

            return false;
        }
		
		return false;
    }

    public function displayDebug()
    {
        if (!empty($this->debug) && $this->displaylog) {
            foreach ($this->debug as $str) {
                echo $str.'<br/>';
            }
        }
    }

    public function updateCronlog()
    {
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
		
        if ($jrConfig['development_production'] == 'development' && !empty($this->debug)) {
            $data = strftime('%H:%M %d/%m/%Y', $this->now).' ~~ ';
            foreach ($this->debug as $str) {
                $data .= $str.' ~~ ';
            }
            logging::log_message($data, 'Cron', 'DEBUG');
        }
    }
}
