<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################


// Creates - adds - removes all jomres cron jobs. A pseudo cron class.
// Nice simple schedules used: M,H,D,W
class jomres_cron
	{
	function jomres_cron ($displayLog=false)
		{
		$this->config=array();
		$this->getcronconfig();
		$this->displaylog = $this->config['displaylogging'];
		$this->verboselog = $this->config['verbose'];
		$this->method = $this->config['method'];
	 	$this->now = time();
	 	$this->lastRan = 0.0;
		$this->allJobs = array();
		$this->allUnlockedJobs = array();
		$this->dueJobs = array();
		$this->debug = array();
		if (!function_exists("curl_init") )
			{
			$this->displaylog = $this->config['displaylogging'];
			$this->debug[]="<b>Cannot process jobs, curl function does not exist!</b>";
			}
		$this->getAllJobs();
		}

	function getcronconfig()
		{
		$query="SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = '0' AND plugin = 'jomcompcronjobs'";
		$settingList=doSelectSql($query);
		foreach ($settingList as $s)
			{
			$this->config[$s->setting]=$s->value;
			}
		}
	
	function triggerJobs()
		{
		$this->now = time();
		$this->findDueJobs();
		$this->runDueJobs();
		$this->updateCronlog();
		}

	function getAllJobs()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		$allJobs=array();
		foreach ($MiniComponents->registeredClasses as $key=>$val)
			{
			if (substr($key, 0, 10) == "06000cron_" )
				$allJobs[]=$key;
			}
		$query="SELECT id,job,schedule,last_ran,parameters,locked FROM #__jomcomp_cron";
		$allJobs=doSelectSql($query);
		
		if (count($allJobs)>0)
			{
			foreach ($allJobs as $job)
				{
				$this->allJobs[]=array('id'=>$job->id,'job_name'=>$job->job,'schedule'=>$job->schedule,'last_ran'=>$job->last_ran,'parameters'=>$job->parameters);
				if ($job->locked == "0")
					$this->allUnlockedJobs[]=array('id'=>$job->id,'job_name'=>$job->job,'schedule'=>$job->schedule,'last_ran'=>$job->last_ran,'parameters'=>$job->parameters);
				}
			}
		else
			$this->debug[]="<b>No jobs in database!</b>";
		}

	function findDueJobs()
		{
		if (count($this->allUnlockedJobs)>0)
			{
			foreach ($this->allUnlockedJobs as $job)
				{
				$jobDue=false;
				
				switch (trim($job['schedule']))
					{
					case "M": // Every minute
						$nextDue=$job['last_ran']+60;
						if ($this->now > $nextDue)
							{
							$jobDue=true;
							$this->dueJobs[]=$job;
							}
						break;
					case "H": // Every hour
						$nextDue=$job['last_ran']+3600;
						if ($this->now > $nextDue)
							{
							$jobDue=true;
							$this->dueJobs[]=$job;
							}
						break;
					case "D": // Every day
						$nextDue=$job['last_ran']+43200;
						if ($this->now > $nextDue)
							{
							$jobDue=true;
							$this->dueJobs[]=$job;
							}
						break;
					case "W": // Every week
					default:
						$nextDue=$job['last_ran']+302400;
						if ($this->now > $nextDue)
							{
							$jobDue=true;
							$this->dueJobs[]=$job;
							}
						break;
					}
				if ( $jobDue )
					$this->lockJob($job['id']);
				if ($this->verboselog)
					{
					$this->debug[]="Found job name ".$job['job_name'];
					if ( $jobDue ) 
						$this->debug[]="<b>This job is due now.</b>";
					}
				}
			}
		else if ($this->verboselog)
			$this->debug[]="No jobs due";
		}

	function lockJob($jobId)
		{
		if ($this->verboselog)
			$this->debug[]="Locking ".(int)$jobId;
		$query="UPDATE #__jomcomp_cron SET `locked`='1' WHERE `id`=".(int)$jobId;
		if (!doInsertSql($query,"") )
			{
			$this->debug[]="Failed to lock job ".(int)$jobId;
			return false;
			}
		return true;
		}

	function unlockJob($jobId)
		{
		if ($this->verboselog)
			$this->debug[]="Unlocking ".(int)$jobId;
		$query="UPDATE #__jomcomp_cron SET `locked`='0' WHERE `id`=".(int)$jobId;
		if (!doInsertSql($query,"") )
			{
			$this->debug[]="Failed to unlock job ".(int)$jobId;
			return false;
			}
		return true;
		}
		
	// Any cron minicomponents will need to be called j06000crom_XXXXXX.class.php
	// We will use jomresConfig_secret to prevent outsiders from triggering a specific cron job remotely. The cron 6000 minicomponent can be edited to disable this check if the developer wants to run the job manually while testing
	function runDueJobs()
		{
		$jomresConfig_secret = get_showtime('secret');
		if (count($this->dueJobs) > 0)
			{
			foreach ($this->dueJobs as $job)
				{
				$request = get_showtime('live_site')."/index2.php?option=com_jomres&task=cron_".$job['job_name']."&secret=".$jomresConfig_secret;
				if (function_exists("curl_init") )
					{
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($ch, CURLOPT_URL, $request);
					curl_setopt($ch, CURLOPT_PORT, 80);
					$curl_output=curl_exec($ch);
					curl_close($ch);
					$this->updateJob_lastran($job['id'],$job['job_name'],$this->now );
					$this->debug[]="Triggered ".(string)$job['job_name']. " at ".strftime("%H:%M %w/%m/%Y", $this->now);
					$this->unlockJob($job['id']);
					}
				}
			}
		}

	function updateJob_lastran($jobId,$jobName,$lastRan)
		{
		if ($this->verboselog)
			$this->debug[]="Updating ".(string)$jobName;
		$query = "UPDATE #__jomcomp_cron SET `last_ran` = ".(int)$lastRan." WHERE `id` = ".(int)$jobId." ";
		if (!doInsertSql($query,"") )
			{
			$this->debug[]="Failed to update ".(string)$jobName. " last_ran to ".(int)$lastRan;
			return false;
			}
		if ($this->verboselog)
			$this->debug[]="Updated ".(string)$jobName. " set last_ran to ".(int)$lastRan;
		return true;
		}

	function jobExists($jobName)
		{
		if (count($this->allJobs)==0)
			$this->getAllJobs();
		if (count($this->allJobs)>0)
			{
			foreach ($this->allJobs as $job)
				{
				if ($job['job_name']==$jobName)
					{
					$this->debug[]="Warning: ".(string)$job['job_name']. " already exists ";
					return true;
					}
				}
			}
		else
			return false;
		}

	function addJob($jobName,$schedule,$parameters)
		{
		if ($this->verboselog)
			$this->debug[]="Adding ".(string)$jobName;
		if (!$this->jobExists($jobName) )
			{
			$lastRan = 0;
			$query = "INSERT INTO #__jomcomp_cron (`job`,`schedule`,`parameters`,`last_ran`) VALUES ('".(string)$jobName."','".(string)$schedule."','".(string)$parameters."','".(int)$lastRan."') ";
			if (!doInsertSql($query,"") )
				{
				$this->debug[]="Failed to add ".(string)$jobName;
				return false;
				}
			$this->debug[]="<b>Added ".(string)$jobName. " set last_ran to ".$lastRan."</b>";
			return true;
			}
		else
			{
			$this->debug[]="Could not add ".(string)$job['job_name']. " as it already exists ";
			return false;
			}
		}

	function removeJob($jobName)
		{
		if ($this->jobExists($jobName) )
			{
			if ($this->verboselog)
				$this->debug[]="Removing ".(string)$jobName;
			$query = "DELETE FROM #__jomcomp_cron WHERE `job` = '".(string)$jobName."' ";
			if (!doInsertSql($query,"") )
				{
				$this->debug[]="Failed to remove ".(string)$jobName;
				return false;
				}
			$this->debug[]="Removed ".(string)$jobName;
			return true;
			}
		else
			{
			$this->debug[]="Failed to remove ".(string)$jobName ." Does not currently exist" ;
			return false;
			}
		}
	
	function updateJobSchedule($jobName,$schedule)
		{
		if ($this->verboselog)
			$this->debug[]="Updating schedule for ".(string)$jobName;
		if ($this->jobExists($jobName) )
			{
			$query = "UPDATE #__jomcomp_cron SET `schedule` = ".(string)$schedule." WHERE `job` = ".(string)$jobName." ";
			if (!doInsertSql($query,"") )
				{
				$this->debug[]="Failed to update schedule ".(string)$jobName;
				return false;
				}
			$this->debug[]="Updated ".(string)$jobName. " set schedule to ".(string)$schedule;
			}
		else
			{
			$this->debug[]="Failed to update schedule ".(string)$jobName ." job does not currently exist" ;
			return false;
			}
		}
	
	function updateJobParameters($jobName,$parameters)
		{
		if ($this->verboselog)
			$this->debug[]="Updating parameters for ".(string)$jobName;
		if ($this->jobExists($jobName) )
			{
			$query = "UPDATE #__jomcomp_cron SET `parameters` = '".(string)$parameters."' WHERE `job` = ".(string)$jobName." ";
			if (!doInsertSql($query,"") )
				{
				$this->debug[]="Failed to update parameters ".(string)$jobName;
				return false;
				}
			if ($this->verboselog)
				$this->debug[]="Updated parameters ".(string)$jobName;
			}
		else
			{
			$this->debug[]="Failed to update schedule ".(string)$jobName ." job does not currently exist" ;
			return false;
			}
		}
		
	function displayDebug()
		{
		if (count($this->debug)>0 && $this->config['displaylogging'] == "1" )
			{
			foreach ($this->debug as $str)
				{
				echo $str."<br/>";
				}
			}
		}
		
	function updateCronlog()
		{
		if (count($this->debug)>0 && $this->config['logging'] == "1" )
			{
			$data=strftime("%H:%M %w/%m/%Y", $this->now)."<br />";
			foreach ($this->debug as $str)
				{
				$data.= $str."<br/>";
				}
			$query = "INSERT INTO #__jomcomp_cronlog (`log_details`) VALUES ('".(string)$data."') ";
			doInsertSql($query,"");
			}
		}
		
	}

?>