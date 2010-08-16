<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class cpanel
	{
	function cpanel()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		$rows		=array();
		$pageoutput	=array();
		$htmlFuncs =jomres_getSingleton('html_functions');
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
		$output['PAGETITLE']=_JRPORTAL_CPANEL;
		$MiniComponents->triggerEvent('10002'); // 
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

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'cpanel.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'rows',$rows);
		$tmpl->displayParsedTemplate();
		}
	}

?>