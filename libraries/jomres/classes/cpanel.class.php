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