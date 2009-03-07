<?php
/**
#
 * Mini-component core file:
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 3
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2008 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j00012invoices_link
	{
	function j00012invoices_link()
		{
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $ePointFilepath,$jomresConfig_live_site,$thisJRUser,$task;
		$id= $thisJRUser->id;
		$task			= jomresGetParam( $_REQUEST, 'task', "" );
		if ($id > 0 && $task == "" )
			{
			$invoices=invoices_getinvoicesfor_juser($id,$stat);
			if (count($invoices)>0 && strlen($task)==0)
				{
				$output['LINK']='<a href="'.JOMRES_SITEPAGE_URL.'&task=list_usersinvoices">'.jr_gettext(_JRPORTAL_INVOICES_SHOWINVOICES,_JRPORTAL_INVOICES_SHOWINVOICES,true,true).'</a>';
				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'invoices_link.html');
				$tmpl->addRows( 'pageoutput',$pageoutput);
				$tmpl->addRows( 'rows',$rows);
				$tmpl->displayParsedTemplate();
				}
			}
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}