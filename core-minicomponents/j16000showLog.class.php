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

jr_import('jomres_xml_parser');

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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
		global $logFiles,$xmlelements,$jomresConfig_live_site;
		global $xml_entry_key,$rows,$jomresAdminPath,$counter,$lastdata,$xmlelements;
		$logfile = jomresGetParam( $_REQUEST, 'logfile',	'' );
		$no_html = jomresGetParam( $_REQUEST, 'no_html',	0 );
		$no_update = jomresGetParam( $_REQUEST, 'no_update',	0 );
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
			$output['LIVESITE']=$jomresConfig_live_site;
			$output['BACKLINK']='<a href="javascript:submitbutton(\'listLogs\')">'._JOMRES_COM_MR_BACK.'</a>';
			echo '<script type="text/javascript" src="'.$jomresConfig_live_site.'/jomres/javascript/heartbeat.js"></script>
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
					$r['LIVESITE']=$jomresConfig_live_site;
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
					$r['LIVESITE']=$jomresConfig_live_site;
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