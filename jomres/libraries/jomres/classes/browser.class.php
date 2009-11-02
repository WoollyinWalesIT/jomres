<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################


/**************************************************************************\
  * eGroupWare API - Browser detect functions                                *
  * This file written by Miles Lott <milosch@groupwhere.org>                 *
  * Majority of code borrowed from Sourceforge 2.5                           *
  * Copyright 1999-2000 (c) The SourceForge Crew - http://sourceforge.net    *
  * Browser detection functions for eGroupWare developers                    *
  * -------------------------------------------------------------------------*
  * This library is part of the eGroupWare API                               *
  * http://www.egroupware.org/api                                            *
  * ------------------------------------------------------------------------ *
  * This library is free software; you can redistribute it and/or modify it  *
  * under the terms of the GNU Lesser General Public License as published by *
  * the Free Software Foundation; either version 2.1 of the License,         *
  * or any later version.                                                    *
  * This library is distributed in the hope that it will be useful, but      *
  * WITHOUT ANY WARRANTY; without even the implied warranty of               *
  * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.                     *
  * See the GNU Lesser General Public License for more details.              *
  * You should have received a copy of the GNU Lesser General Public License *
  * along with this library; if not, write to the Free Software Foundation,  *
  * Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA            *
  \**************************************************************************/

  /* $Id: class.browser.inc.php,v 1.23 2004/05/05 12:03:18 reinerj Exp $ */

	class browser
	{
		var $BROWSER_AGENT;
		var $BROWSER_VER;
		var $BROWSER_PLATFORM;
		var $br;
		var $p;
		var $data;

		function browser()
		{
			$HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];
			/*
				Determine browser and version
			*/
			if(ereg('MSIE ([0-9].[0-9]{1,2})',$HTTP_USER_AGENT,$log_version))
			{
				$this->BROWSER_VER = $log_version[1];
				$this->BROWSER_AGENT = 'IE';
			}
			elseif(ereg('Opera ([0-9].[0-9]{1,2})',$HTTP_USER_AGENT,$log_version) ||
				ereg('Opera/([0-9].[0-9]{1,2})',$HTTP_USER_AGENT,$log_version))
			{
				$this->BROWSER_VER   = $log_version[1];
				$this->BROWSER_AGENT = 'OPERA';
			}
			elseif(eregi('iCab ([0-9].[0-9a-zA-Z]{1,4})',$HTTP_USER_AGENT,$log_version) ||
				eregi('iCab/([0-9].[0-9a-zA-Z]{1,4})',$HTTP_USER_AGENT,$log_version))
			{
				$this->BROWSER_VER   = $log_version[1];
				$this->BROWSER_AGENT = 'iCab';
			}
			elseif(ereg('Gecko',$HTTP_USER_AGENT,$log_version))
			{
				$this->BROWSER_VER   = $log_version[1];
				$this->BROWSER_AGENT = 'MOZILLA';
			}
			elseif(ereg('Konqueror/([0-9].[0-9].[0-9]{1,2})',$HTTP_USER_AGENT,$log_version) ||
				ereg('Konqueror/([0-9].[0-9]{1,2})',$HTTP_USER_AGENT,$log_version))
			{
				$this->BROWSER_VER=$log_version[1];
				$this->BROWSER_AGENT='Konqueror';
			}
			else
			{
				$this->BROWSER_VER=0;
				$this->BROWSER_AGENT='OTHER';
			}

			/*
				Determine platform
			*/
			if(strstr($HTTP_USER_AGENT,'Win'))
			{
				$this->BROWSER_PLATFORM='Win';
			}
			elseif(strstr($HTTP_USER_AGENT,'Mac'))
			{
				$this->BROWSER_PLATFORM='Mac';
			}
			elseif(strstr($HTTP_USER_AGENT,'Linux'))
			{
				$this->BROWSER_PLATFORM='Linux';
			}
			elseif(strstr($HTTP_USER_AGENT,'Unix'))
			{
				$this->BROWSER_PLATFORM='Unix';
			}
			elseif(strstr($HTTP_USER_AGENT,'Beos'))
			{
				$this->BROWSER_PLATFORM='Beos';
			}
			else
			{
				$this->BROWSER_PLATFORM='Other';
			}

			/*
			echo "\n\nAgent: $HTTP_USER_AGENT";
			echo "\nIE: ".browser_is_ie();
			echo "\nMac: ".browser_is_mac();
			echo "\nWindows: ".browser_is_windows();
			echo "\nPlatform: ".browser_get_platform();
			echo "\nVersion: ".browser_get_version();
			echo "\nAgent: ".browser_get_agent();
			*/

			// The br and p functions are supposed to return the correct
			// value for tags that do not need to be closed.  This is
			// per the xhmtl spec, so we need to fix this to include
			// all compliant browsers we know of.
			if($this->BROWSER_AGENT == 'IE')
			{
				$this->br = '<br/>';
				$this->p = '<p/>';
			}
			else
			{
				$this->br = '<br>';
				$this->p = '<p>';
			}
		}

		function return_array()
		{
			$this->data = array(
				'agent'    => $this->get_agent(),
				'version'  => $this->get_version(),
				'platform' => $this->get_platform()
			);

			return $this->data;
		}

		function get_agent()
		{
			return $this->BROWSER_AGENT;
		}

		function get_version()
		{
			return $this->BROWSER_VER;
		}

		function get_platform()
		{
			return $this->BROWSER_PLATFORM;
		}

		function is_linux()
		{
			if($this->get_platform()=='Linux')
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function is_unix()
		{
			if($this->get_platform()=='Unix')
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function is_beos()
		{
			if($this->get_platform()=='Beos')
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function is_mac()
		{
			if($this->get_platform()=='Mac')
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function is_windows()
		{
			if($this->get_platform()=='Win')
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function is_ie()
		{
			if($this->get_agent()=='IE')
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function is_netscape()
		{
			if($this->get_agent()=='MOZILLA')
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function is_opera()
		{
			if($this->get_agent()=='OPERA')
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		// Echo content headers for file downloads
		function content_header($fn='',$mime='',$length='',$nocache=True)
		{
			// if no mime-type is given or it's the default binary-type, guess it from the extension
			if(empty($mime) || $mime == 'application/octet-stream')
			{
				$mime_magic = createObject('phpgwapi.mime_magic');
				$mime = $mime_magic->filename2mime($fn);
			}
			if($fn)
			{
				if($this->get_agent() == 'IE') // && browser_get_version() == "5.5")
				{
					$attachment = '';
				}
				else
				{
					$attachment = ' attachment;';
				}

				// Show this for all
				header('Content-disposition:'.$attachment.' filename="'.$fn.'"');
				header('Content-type: '.$mime);

				if($length)
				{
					header('Content-length: '.$length);
				}

				if($nocache)
				{
					header('Pragma: no-cache');
					header('Pragma: public');
					header('Expires: 0');
					header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
				}
			}
		}
	}
	

?>