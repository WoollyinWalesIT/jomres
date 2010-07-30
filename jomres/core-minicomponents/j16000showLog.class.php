<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


jr_import('jomres_xml_parser');

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j16000showLog
	{
	function j16000showLog()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$logfile = jomresGetParam( $_REQUEST, 'logfile',	'' );
		$no_html = jomresGetParam( $_REQUEST, 'no_html',	0 );
		$no_update = jomresGetParam( $_REQUEST, 'no_update',	0 );
		
		$xmlelements = get_showtime('xmlelements');
		$logFiles = get_showtime('logFiles');
		
		$pageoutput=array();
		$output=array();
		$rows=array();
		$temp=array();
		
		$output['TITLE']="".$logFiles[$logfile]." Log";
		$output['DATETIME']='datetime';
		$output['JOMRESSESSION']='jomressession';
		$output['TASK']='task';
		$output['REQUESTURI']='requesturi';
		$output['MESSAGE']=JOMRES_COM_A_MESSAGE;

		if ($no_html == 0)
			{
			$output['DELETE']=_JOMRES_COM_MR_ROOM_DELETE;
			$output['DELETELINK']=JOMRES_SITEPAGE_URL_ADMIN.'&task=clearLog&logfile='.$logfile;
			$output['LIVESITE']=get_showtime('live_site');
			$output['BACKLINK']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=listLogs">'._JOMRES_COM_MR_BACK.'</a>';
			echo '<script type="text/javascript" src="'.get_showtime('live_site').'/jomres/javascript/heartbeat.js"></script>
				';
				
			if ($no_update ==0)
				{
				$output['HEARTBEAT']= '<script>
				jQuery(document).ready(function() {
					jQuery.jheartbeat.set({
						url: "'.JOMRES_SITEPAGE_URL_ADMIN.'&task=showLog&no_html=1&logfile='.$logfile.'",
						delay: 5000,
						div_id: "logfileresult"
					});
				});
				</script>';
				}
				

			
			$theElements=$xmlelements[$logfile];
			$xml_root_key=$theElements['root'];
			//$xml_entry_key=$theElements['entry'];
			$xml_file = JOMRES_SYSTEMLOG_PATH.$logFiles[$logfile];
			if (file_exists(JOMRES_SYSTEMLOG_PATH.$logFiles[$logfile]) )
				{
				if (!($fp = fopen($xml_file, 'r')))
					{
					die("Could not open $xml_file for parsing!\n");
					}
				$xml="";
				while ($data = fgets($fp, 8192))
					{
					$xml.=$data;
					}
					
				jr_import('jomres_xml_parser');
				$p = new jomres_xml_parser($xml);
				$result=$p->getOutput($xml);
				$counter=0;
				foreach ($result[$xml_root_key] as $res)
					{
					$r=array();
					$r['COUNTER']=$counter;
					$r['DATETIME']=$res['datetime'];
					$r['TASK']=$res['requesturi'];
					$r['MESSAGEFULL']=$res['message'];
					$r['JOMRESSESSION']=$res['jomressession'];
					$r['LIVESITE']=get_showtime('live_site');
					$rows[]=$r;
					$counter++;
					}
				
				$jrtbar =jomres_getSingleton('jomres_toolbar');
				$jrtb  = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN."&task=listLogs",'');
				$jrtb .= $jrtbar->endTable();
				$output['{JOMRESTOOLBAR}']=$jrtb;

				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
				$tmpl->readTemplatesFromInput( 'logfilefragment.html');
				$tmpl->addRows( 'rows',$rows);
				$output['LOGFILEDATA'] = $tmpl->getParsedTemplate();
				}
			else
				{
				$output['LOGFILEDATA'] ="No data yet";
				}
				
			$pageoutput[]=$output;
				


			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'logfileoutput.html');
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->displayParsedTemplate();
			}
		else
			{
			if (file_exists(JOMRES_SYSTEMLOG_PATH.$logFiles[$logfile]) )
				{
				$counter=0;
				$theElements=$xmlelements[$logfile];
				$xml_root_key=$theElements['root'];
				//$xml_entry_key=$theElements['entry'];
				$xml_file = JOMRES_SYSTEMLOG_PATH.$logFiles[$logfile];
				
				if (!($fp = fopen($xml_file, 'r')))
					{
					die("Could not open $xml_file for parsing!\n");
					}
				$xml="";
				while ($data = fgets($fp, 8192))
					{
					$xml.=$data;
					}
				jr_import('jomres_xml_parser');
				$p = new jomres_xml_parser($xml);
				$result=$p->getOutput($xml);
				$counter=0;
				foreach ($result[$xml_root_key] as $res)
					{
					$r=array();
					$r['COUNTER']=$counter;
					$r['DATETIME']=$res['datetime'];
					$r['TASK']=$res['requesturi'];
					$r['MESSAGEFULL']=$res['message'];
					$r['JOMRESSESSION']=$res['jomressession'];
					$r['LIVESITE']=get_showtime('live_site');
					$rows[]=$r;
					$counter++;
					if ($counter == 10)
						break;
					}
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
				$tmpl->readTemplatesFromInput( 'logfilefragment.html');
				$tmpl->addRows( 'pageoutput',$pageoutput);
				$tmpl->addRows( 'rows',$rows);
				$tmpl->displayParsedTemplate();
				}
			else
				{
				echo "No data yet";
				}
			}

		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}