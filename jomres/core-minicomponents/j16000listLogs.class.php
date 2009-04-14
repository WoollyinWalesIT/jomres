<?php
/**
#
 * Mini-component core file:
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j16000listLogs
	{
	function j16000listLogs()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jrConfig,$logFiles,$jomresAdminPath;
		
		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,'');
		$jrtb .= $jrtbar->endTable();
		
		$output['JOMRESTOOLBAR']=$jrtb;

		$output=array();
		$pageoutput=array();
		$rows=array();
		
		$output['PAGETITLE']=JOMRES_COM_A_AVAILABLELOGS;
		$counter=0;
		if (count($logFiles) > 0)
			{
			foreach ($logFiles as $key=>$file)
				{
				//echo JOMRES_SYSTEMLOG_PATH.$file;
				if (file_exists(JOMRES_SYSTEMLOG_PATH.$file))
					{
					$r=array("LOGFILELINK"=>'<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=showLog&logfile='.$key.'">'.ucwords($key)."</a>","LOGFILELINK_NOUPDATE"=>'<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=showLog&no_update=1&logfile='.$key.'">'.ucwords($key)." noupdate"."</a>");
					$rows[]=$r;
					$counter++;
					}
				}
			}
		
		if ($counter==0)
			echo JOMRES_COM_A_LOGS_NOENTRIES;
		else
			{
			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'list_logs.html');
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->addRows( 'rows',$rows);
			$tmpl->displayParsedTemplate();
			}
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}