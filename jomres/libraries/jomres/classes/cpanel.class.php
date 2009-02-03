<?php
/**
#
 * JRPortal core file
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

class cpanel
	{
	function cpanel()
		{
		//global $jomresConfig_live_site,$jomresAdminPath,$indexphp;
		global $MiniComponents,$htmlFuncs,$jrConfig;

		$rows		=array();
		$pageoutput	=array();
		//$info		=array();
		$htmlFuncs = new html_functions();
		if (!file_exists(JOMRESPATH_BASE.'/images/jomresimages/small/ViewDatabase.png') )
			{
			$icon_database=makeImageValid("Help Index Results.jpg");
			$icon_config=makeImageValid("Symbol Configuration.jpg");
			}
		else
			{
			$icon_database=makeImageValid("ViewDatabase.png");
			$icon_config=makeImageValid("EditConfiguration.png");
			}
		$Itemids = array();
		$query = "SELECT id"
		. "\n FROM #__menu"
		. "\n WHERE "
		. "\n published = 1"
		. "\n AND link LIKE 'index.php?option=com_jomres' LIMIT 1";
		$itemQueryRes = doSelectSql($query);
		if (count($itemQueryRes)>0)
			{
			foreach ($itemQueryRes as $i)
				{
				$Itemids[] = $i->id;
				}
			}
		if (!in_array((int)$jrConfig['jomresItemid'],$Itemids))
			echo '<font color="red" face="arial" size="1">Warning: Your Jomres Itemid and the Itemid stored in Site Config are different, this may result in unpredictable behaviour. It is recommended that you modify your Site Config Itemid to match that in the main menu. See <a href="http://tickets.jomres.net/index.php?_m=knowledgebase&_a=viewarticle&kbarticleid=96&nav=0,3" target="_blank"> this article for more information</a></font>';
		$output['PAGETITLE']=_JRPORTAL_CPANEL;

		$MiniComponents->triggerEvent('10002'); // Custom task
		$mcOutput=$MiniComponents->getAllEventPointsData('10002');

		if (count($mcOutput)>0)
			{
			foreach ($mcOutput as $key=>$val)
				{
				$r=array();
				$r["OPTIONS"]=$val;
				$rows[]=$r;
				}
			}

		//$stats=$this->getStatsPanel();
		//$inforows['INFO']=$htmlFuncs->cpanelInfoRow(_JRPORTAL_STATS_PATETITLE,$stats);

		$pageoutput[]=$output;
		//$info[]=$inforows;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'cpanel.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'rows',$rows);
		//$tmpl->addRows( 'info',$info);
		$tmpl->displayParsedTemplate();
		}

/*
	function getStatsPanel()
		{
		global $MiniComponents;
		$pageoutput=array();
		$ajaxUrl="index3.php?option=com_jomres&task=getstats&no_html=1";

		$functionStr=",
			function(data){
				jQuery('div.graphcontainer').empty();
				jQuery('div.graphcontainer').append(data);
				}";
		$MiniComponents->triggerEvent('16010');  // Separate stat type options
		$mcOutput=$MiniComponents->getAllEventPointsData('16010');
		if (count($mcOutput)>0)
			{
			$statoptions=array();
			$statoptions[] = jomresHTML::makeOption( '', '' );
			foreach ($mcOutput as $key=>$val)
				{
				$statoptions[] = jomresHTML::makeOption($val['task'], $val['text'] );
				}
			$output['STATOPTION_DROPDOWN']=jomresHTML::selectList( $statoptions, 'statoption','id="statoption" class="inputbox" size="1" onChange="jQuery.get(\''.$ajaxUrl.'\', { statoption: document.getElementById(\'statoption\').value}'.$functionStr.');" ', 'value', 'text', $statoption);
			}

		$output['STATTYPE']	= _JRPORTAL_STATS_STATTYPE;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( $jomresAdminPath.'/templates/basic/portal' );
		$tmpl->readTemplatesFromInput( 'show_stats.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'rows',$rows);

		$stats=$tmpl->getParsedTemplate();
		return $stats;
		}
*/
	}

?>