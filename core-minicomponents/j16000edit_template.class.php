<?php
/**
#
 * Mini-component core file: Constructs and displays edit extra form
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

class j16000edit_template {
	function j16000edit_template()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$templatename		= jomresGetParam( $_REQUEST, 'jomresTemplateFile', '' );
		
		$custom_templates = new jomres_custom_template_handler();
		$output['TEMPLATEHTML']= $custom_templates->getTemplateData($templatename);
		$output['TEMPLATENAME']=$templatename;
		
	
		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','','',true,'save_template');
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN."&task=listTemplates",'');
		$jrtb .= $jrtbar->toolbarItem('delete',JOMRES_SITEPAGE_URL_ADMIN."&task=delete_template&templatename=".$templatename."".jomresURLToken()."&no_html=1&id=".$id,'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1">';
		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		
		// We can't use patTemplate to output the template data here because.....it tries to parse the data from the template file _as_ it's own template data. No biggie
		// Back to good ol' "echo" in this script.
		$outputString = '
		<form action="'.JOMRES_SITEPAGE_URL_ADMIN.'" method="post" name="adminForm">
		<table class="jradmin_innerwrapper">
			<tr>
				<td class="jomres_title">'.$output['PAGETITLE'].'</td>
			</tr>
			<tr>
				<td>'.$output['JOMRESTOOLBAR'].'</td>
			</tr>
			<tr>
				<td>'.$output['TEMPLATENAME'].'</td>
			</tr>
			<tr>
				<td>
					<textarea class="inputbox" cols="100" rows="100" name="templatedata">'.$output['TEMPLATEHTML'].'</textarea>
				</td>
			</tr>
		</table>

		'.$output['JOMRESTOKEN'].'
		<input type="hidden" name="templatename" value="'.$output['TEMPLATENAME'].'" />
		<input type="hidden" name="task" value="save_template" />
		</form>';
		echo $outputString;
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>