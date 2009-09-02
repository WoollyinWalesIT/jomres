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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

//global $logFiles,$xmlelements;

$logFiles=array('system'=>'jomres_system_log.xml','request'=>'jomres_request_log.xml','gateway'=>'jomres_gateway_log.xml','booking'=>'jomres_booking_log.xml','error'=>'jomres_error_log.xml','jrportalquery'=>'jrportalquery_log.xml');
$systemElements=array('root'=>'systemlog','entry'=>'systemlogentry');
$requestElements=array('root'=>'requestlog','entry'=>'requestlogentry');
$gatewayElements=array('root'=>'gatewaylog','entry'=>'gatewaylogentry');
$bookingElements=array('root'=>'bookinglog','entry'=>'bookinglogentry');
$errorElements=array('root'=>'errorlog','entry'=>'errorlogentry');
$jrportalqueryElements=array('root'=>'jrportalquerylog','entry'=>'jrportalquerylogentry');

$xmlelements=array('system'=>$systemElements,'request'=>$requestElements,'gateway'=>$gatewayElements,'booking'=>$bookingElements,'error'=>$errorElements,'jrportalquery'=>$jrportalqueryElements);
set_showtime('xmlelements',$xmlelements);
set_showtime('logFiles',$logFiles);

function characterData($parser, &$data){
	global $current_tag, $temp;
	global $lastdata, $lastTag;
	$temp['LIVESITE']=get_showtime('live_site');
		switch($current_tag)
			{
			case 'DATETIME':
				$temp['datetime'] .= $data;
				break;
			case 'JOMRESSESSION':
				$temp['jomressession'] .= $data;
				break;
			case 'TASK':
				$temp['task'] .= $data;
				break;
			case 'REQUESTURI':
				$temp['requesturi'] .= $data;
				break;
			case 'MESSAGE':
				$temp['messagefull'] .= $data;
				break;
			default:
				break;
			}
	}

function startElement($parser, $name, $attrs=''){
	global $open_tags, $temp, $current_tag,$xml_entry_key;
	$current_tag = $name;
	switch($name)
		{
		case strtoupper($xml_entry_key):
		break;
		default:
		break;
		}
	}

function endElement($parser, $name, $attrs=''){
	global $close_tags, $temp, $current_tag,$xml_entry_key;
	switch($name)
		{
		case strtoupper($xml_entry_key):
		return_page($temp);
		$temp = array();
		break;
		default:
		break;
		}
	}

function return_page()
	{
	global $temp,$rows,$counter;

	$counter++;
	 if ($counter % 2)
		$temp['style'] ="odd";
	else
		$temp['style'] ="even";

	$temp['counter'] =$counter;
	$rows[]=$temp;
	}

?>