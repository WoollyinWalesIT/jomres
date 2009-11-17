<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

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