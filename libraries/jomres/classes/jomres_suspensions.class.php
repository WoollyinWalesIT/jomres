<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_suspensions
	{
	function jomres_suspensions()
		{
		$this->manager_id = 0;  // This is the userid in #__jomres_managers. It corresponds with the CMS user's id
		$this->jomres_system_manager_id = 0; // This is the manager_uid in #__jomres_managers
		$this->manger_is_suspended = false;
		$this->manager_properties = array();
		$this->suspended_manager_allowed_tasks = array('suspended','dashboard');
		}
	
	
	function suspended_manager_allowed_task($task='')
		{
		if (in_array($task,$this->suspended_manager_allowed_tasks))
			return true;
		return false;
		}
	
	function set_manager_id($id)
		{
		$this->manager_id = (int)$id;
		$query = "SELECT `manager_uid` FROM #__jomres_managers WHERE userid = ".(int)$id. " LIMIT 1";
		$this->jomres_system_manager_id = doSelectSql($query,1);
		
		$this->manger_is_suspended = $this->is_manager_suspended($id);
		$query="SELECT property_uid FROM #__jomres_managers_propertys_xref  WHERE manager_id = '".(int)$this->manager_id."'";
		$managersToPropertyList = doSelectSql($query);
		if (count($managersToPropertyList) > 0)
			{
			foreach ($managersToPropertyList as $x)
				{
				$this->manager_properties[]=$x->property_uid;
				}
			}
		}
	
	function is_manager_suspended($id=null)
		{
		if (!isset($id))
			$id = $this->manager_id;
		$query = "SELECT `suspended` FROM #__jomres_managers WHERE userid = ".(int)$id. " LIMIT 1";
		$state = doSelectSql($query,1);
		if ($state =="1")
			return true;
		return false;
		}
	
	function suspend_manager()
		{
		if ($this->manager_id == 0)
			return false;
		$query="UPDATE #__jomres_managers SET `suspended`=1 WHERE userid =".$this->manager_id;
		$result = doInsertSql($query,'');
		$this->email_suspension_to_manager();
		}
	
	function unsuspend_manager()
		{
		if ($this->manager_id == 0)
			return false;
		$query="UPDATE #__jomres_managers SET `suspended`=0 WHERE userid =".$this->manager_id;
		$result = doInsertSql($query,'');
		$this->email_unsuspension_to_manager();
		}
	
	function unpublish_managers_properties()
		{
		if ($this->manager_id == 0)
			return false;

		if (count($this->manager_properties) > 0)
			{
			$g=genericOr($this->manager_properties,'propertys_uid');
			$query = "UPDATE #__jomres_propertys SET `published`=0 WHERE ".$g;
			$result = doInsertSql($query,'');
			}
		}
		
	function publish_managers_properties()
		{
		if ($this->manager_id == 0)
			return false;
		if (count($this->manager_properties) > 0)
			{
			$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
			$jrConfig=$siteConfig->get();
			foreach ($this->manager_properties as $property_uid)
				{
				if ($jrConfig['useSubscriptions']=="1")
					{
					$allowedProperties = subscribers_getAvailablePropertySlots($this->jomres_system_manager_id);
					$existingPublishedProperties = subscribers_getManagersPublishedProperties($this->jomres_system_manager_id);
					if ($allowedProperties > count($existingPublishedProperties))
						{
						$query="UPDATE #__jomres_propertys SET `published`='1' WHERE propertys_uid = '".(int)$property_uid."'";
						doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY',_JOMRES_MR_AUDIT_PUBLISH_PROPERTY,FALSE));
						}
					}
				else
					{
					$query="UPDATE #__jomres_propertys SET `published`='1' WHERE propertys_uid = '".(int)$property_uid."'";
					doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY',_JOMRES_MR_AUDIT_PUBLISH_PROPERTY,FALSE));
					}
				
				}
			}
		}

	function email_suspension_to_manager()
		{
		$jomresConfig_mailfrom=get_showtime('mailfrom');
		$jomresConfig_fromname=get_showtime('fromname');
	
		$user_deets = jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id($this->manager_id);
		$email = $user_deets[$this->manager_id]["email"];
		$output = array();
		$pageoutput = array();
		
		$subject = _JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE;
		$body = _JOMRES_COM_CONFIRMATION_DEAR.$user_deets[$this->manager_id]['name'].".\r\n
		"._JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL;

		if (!jomresMailer( $jomresConfig_mailfrom, $jomresConfig_fromname, $email, $subject, $body, $mode=0))
			error_logging('Failure in sending suspension email to user. Target address: '.$email.' Subject'.$subject);

		sendAdminEmail($subject,$body);
		}
		
	function email_unsuspension_to_manager()
		{
		$jomresConfig_mailfrom=get_showtime('mailfrom');
		$jomresConfig_fromname=get_showtime('fromname');

		$user_deets = jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id($this->manager_id);
		$email = $user_deets[$this->manager_id]["email"];
		$output = array();
		$pageoutput = array();
		
		$subject = _JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE;
		$body = _JOMRES_COM_CONFIRMATION_DEAR.$user_deets[$this->manager_id]['name'].".\r\n
		"._JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL;

		if (!jomresMailer( $jomresConfig_mailfrom, $jomresConfig_fromname, $email, $subject, $body, $mode=0))
			error_logging('Failure in sending unsuspension email to user. Target address: '.$email.' Subject'.$subject);

		sendAdminEmail($subject,$body);
		}
	
	}

?>