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

class jrportal_sms_clickatellhandler
	{
	function jrportal_sms_clickatellhandler($property_uid)
		{
		//http://api.clickatell.com/http/sendmsg?api_id=xxxx&user=xxxx&password=xxxx&to=xxxx&text=xxxx
		$this->clickatell_api_url="http://api.clickatell.com/http/sendmsg?";
		$sms_clickatell_settings = new jrportal_sms_clickatell_settings();
		$this->settings=$sms_clickatell_settings->get_sms_clickatell_settings();
		$this->queryResult=false;
		$this->getVars = '';
		$this->errorText=array();
		}

	function sendQuery()
		{
		if (strlen($this->clickatell_api_url)==0)
			{
			$this->setErrorText("Remote server's url not set");
			return false;
			}

		$fields_string='';
		$fields_string.="api_id=".urlencode($this->settings['api_id']);
		$fields_string.="&user=".urlencode($this->settings['username']);
		$fields_string.="&password=".urlencode($this->settings['password'])."&";
		if (count($this->getVars)>0)
			{
			foreach($this->getVars as $key=>$value) { $fields_string .= $key.'='.urlencode($value).'&'; }
			rtrim($fields_string,'&');
			}
		else
			{
			return false;
			}
		//open connection
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,$this->clickatell_api_url.$fields_string);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,2);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);  // Without this the response is true, whereas we want the actual contents of the response
		//execute post
		$result = curl_exec($ch);
		// check if any error occured
		if(curl_errno($ch))
			{
			$this->setErrorText(curl_error($ch));
			return false;
			}
		else
			{
			$this->queryResult=$result;
			}
		//close connection
		curl_close($ch);
		return true;
		}
		
	function addField($key,$val)
		{
		$this->getVars[$key]=$val;
		}
	
	function getResponse()
		{
		return $this->queryResult;
		}
		
	function setErrorText($text)
		{
		$this->errorText[]=$text;
		}
	}

?>