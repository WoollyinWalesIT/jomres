<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

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