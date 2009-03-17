<?php


/**
 * Jomres example class
 **/
class jomres extends CMSModule
{
  function GetName()
  {
    return 'jomres';
  }

  function GetFriendlyName()
  {
    return "Jomres";
  }

  function GetVersion()
  {
    return '4';
  }

  function GetHelp()
  {
    return "";
  }

  function GetAuthor()
  {
    return 'Vince Wooll';
  }

  function GetAuthorEmail()
  {
    return 'sales@jomres.net';
  }

  function GetChangeLog()
  {
    return "";
  }

  function IsPluginModule()
  {
    return false;
  }

  function HasAdmin()
  {
    return true;
  }

  function GetAdminSection()
  {
    return 'extensions';
  }

  function GetAdminDescription()
  {
    return "Jomres online booking system";
  }

  function VisibleToAdminUser()
  {
    return $this->CheckPermission('Use Jomres');
  }

  function GetDependencies()
  {
    return array();
  }

  function MinimumCMSVersion()
  {
    return "1.0";
  }

  function MaximumCMSVersion()
  {
    return "1.5.2";
  }

  function SetParameters()
  {
	}
	
  function GetEventDescription ( $eventname )
  {
    return "";
  }

  function GetEventHelp ( $eventname )
  {
    return $this->Lang('event_help_'.$eventname );
  }

  function InstallPostMessage()
  {
    return $this->Lang('postinstall');
  }

  function UninstallPostMessage()
  {
    return $this->Lang('postuninstall');
  }

  function UninstallPreMessage()
  {
    return $this->Lang('really_uninstall');
  }

  function _SetStatus($oid, $status) {
    //...
  }

} //end class