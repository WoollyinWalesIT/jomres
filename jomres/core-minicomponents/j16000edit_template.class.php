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

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j16000edit_template {
	function j16000edit_template()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$templatename		= jomresGetParam( $_REQUEST, 'jomresTemplateFile', '' );
		
		$custom_templates =jomres_getSingleton('jomres_custom_template_handler');
		$templatehtml= $custom_templates->getTemplateData($templatename);
		$output['TEMPLATEHTML']=str_replace("textarea","text<x>area",$templatehtml);
		$output['TEMPLATENAME']=$templatename;
		
	
		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','','',true,'save_template');
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN."&task=listTemplates",'');
		$jrtb .= $jrtbar->toolbarItem('delete',JOMRES_SITEPAGE_URL_ADMIN."&task=delete_template&templatename=".$templatename."".jomresURLToken()."&no_html=1&id=".$id,'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';
		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		
		//$onDisk = file_get_contents($custom_templates->default_template_files_folder.JRDS.$templatename );
		/*
		<!-- <td>
			<textarea class="inputbox" cols="75" rows="100" name="templatedata" readonly="yes" disabled="yes">'.$output['TEMPLATEHTML'].'</textarea>
		</td> -->
		*/
		
		
		// We can't use patTemplate to output the template data here because.....it tries to parse the data from the template file _as_ it's own template data. No biggie
		// Back to good ol' "echo" in this script.
		$outputString = '
		<script src="'.get_showtime('live_site').'/jomres/javascript/codemirror/js/codemirror.js" type="text/javascript"></script>

		<form action="'.JOMRES_SITEPAGE_URL_ADMIN.'" method="post" name="adminForm">
		<input type="button" value="SUBMIT" onclick="get_jr_val(document)" />
		<table class="jradmin_innerwrapper">
			<tr>
				<td class="jomres_title" colspan = "2" >'.$output['PAGETITLE'].'</td>
			</tr>
			<tr>
				<td colspan = "2" >'.$output['TEMPLATENAME'].'</td>
			</tr>
			<tr>
				<td colspan = "2" >
					<textarea id="code" cols="150" rows="100" name="templatedata">'.$output['TEMPLATEHTML'].'</textarea>
				</td>

				
			</tr>
		</table>

		'.$output['JOMRESTOKEN'].'
		<input type="hidden" name="templatename" value="'.$output['TEMPLATENAME'].'" />
		<input type="hidden" name="task" value="save_template" />
		</form>
    <script type="text/javascript">
      var editor = CodeMirror.fromTextArea(\'code\', {
        height: "1000px",
        parserfile: ["parsexml.js", "parsecss.js", "tokenizejavascript.js", "parsejavascript.js",
                     "'.get_showtime('live_site').'/jomres/javascript/codemirror/contrib/php/js/tokenizephp.js", "'.get_showtime('live_site').'/jomres/javascript/codemirror/contrib/php/js/parsephp.js",
                     "'.get_showtime('live_site').'/jomres/javascript/codemirror/contrib/php/js/parsephphtmlmixed.js"],
        stylesheet: ["'.get_showtime('live_site').'/jomres/javascript/codemirror/css/xmlcolors.css", "'.get_showtime('live_site').'/jomres/javascript/codemirror/css/jscolors.css", "'.get_showtime('live_site').'/jomres/javascript/codemirror/css/csscolors.css", "'.get_showtime('live_site').'/jomres/javascript/codemirror/css/phpcolors.css"],
        path: "'.get_showtime('live_site').'/jomres/javascript/codemirror/js/",
        continuousScanning: 500
      });
	  
	  function get_jr_val(doc)
		{
		valoo = editor.getCode();
		jQuery("#code").val(valoo);
		document.adminForm.submit();
		}
    </script>

		
		';
		echo $outputString;
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>