<?php
/**
#
 * XML parsing core file
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

global $logFiles,$xmlelements;

$logFiles=array('system'=>'jomres_system_log.xml','request'=>'jomres_request_log.xml','gateway'=>'jomres_gateway_log.xml','booking'=>'jomres_booking_log.xml','error'=>'jomres_error_log.xml','jrportalquery'=>'jrportalquery_log.xml');
$systemElements=array('root'=>'systemlog','entry'=>'systemlogentry');
$requestElements=array('root'=>'requestlog','entry'=>'requestlogentry');
$gatewayElements=array('root'=>'gatewaylog','entry'=>'gatewaylogentry');
$bookingElements=array('root'=>'bookinglog','entry'=>'bookinglogentry');
$errorElements=array('root'=>'errorlog','entry'=>'errorlogentry');
$jrportalqueryElements=array('root'=>'jrportalquerylog','entry'=>'jrportalquerylogentry');

$xmlelements=array('system'=>$systemElements,'request'=>$requestElements,'gateway'=>$gatewayElements,'booking'=>$bookingElements,'error'=>$errorElements,'jrportalquery'=>$jrportalqueryElements);



function characterData($parser, &$data){
	global $current_tag, $temp, $jomresConfig_live_site;
	global $lastdata, $lastTag;
	$temp['LIVESITE']=$jomresConfig_live_site;
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