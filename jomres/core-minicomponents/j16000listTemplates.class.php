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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j16000listTemplates
	{
	function j16000listTemplates()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jomresConfig_live_site;
		$output=array();

		$output['TITLE']=_JOMRES_COM_TEMPLATEEDITING_TITLE;
		$output['INSTRUCTIONS']=_JOMRES_COM_TEMPLATEEDITING_DESC;
		
		$output['HTEMPLATENAME']=_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME;
		$output['HCUSTOMISED']=_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED;
		$output['HLAST_EDITED_DB']=_JOMRES_LASTEDITED_DB;
		$output['HLAST_EDITED_DISK']=_JOMRES_LASTEDITED_DISK;
		$output['HLAST_WARNINGICON']=_JOMRES_LASTEDITED_WARNINGICON;
		$output['EDITWARNINGNOTE']=_JOMRES_LASTEDITED_WARNING;
		
		$custom_templates = new jomres_custom_template_handler();
		
		$frontendTemplatesFolder=JOMRESPATH_BASE.JRDS."templates".JRDS."jomres".JRDS."frontend";
		$d = @dir($frontendTemplatesFolder);
		$docs = array();
		$rows = array();
		if($d)
			{
			while (FALSE !== ($entry = $d->read()))
				{
				$filename = $entry;
				if( substr($entry,0,1) != '.')
					{
					$docs[] =$entry;
					}
				}
			$d->close();
			if (count($docs)>0)
				{
				natsort($docs);
				$r=array();
				
				$r['EDITED']=_JOMRES_COM_MR_NO;
				if ($custom_templates->hasThisTemplateBeenCustomised("jomrescss.css"))
					$r['EDITED']="<b>"._JOMRES_COM_MR_YES."</b>";
				$r['EDITLINK']= '<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_template&jomresTemplateFile=jomrescss.css">jomrescss.css</a>' ;
				$rows[]=$r;
				
				foreach ($docs as $doc)
					{
					if ($doc != "jomrescss.css" && $doc != "srch.html")
						{
						$r=array();
						$r['EDITED']=_JOMRES_COM_MR_NO;
						if ($custom_templates->hasThisTemplateBeenCustomised($doc))
							{
							$r['WARNINGICON']="";
							$r['LAST_EDITED_DISK'] = date ("Y-m-d H:i:s", filemtime($frontendTemplatesFolder.JRDS.$doc));
							
							$query = "SELECT last_edited FROM #__jomres_custom_templates WHERE `template_name` = '".$doc."'";
							$r['LAST_EDITED_DB'] = doSelectSql($query,1);
							if ($r['LAST_EDITED_DB'] != "0000-00-00 00:00:00")
								{
								if ($r['LAST_EDITED_DISK'] > $r['LAST_EDITED_DB'])
									$r['WARNINGICON']=_JOMRES_LASTEDITED_WARNINGICON_TEXT;
								}
							else
								$r['LAST_EDITED_DB'] = _JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE;
							$r['EDITED']="<b>"._JOMRES_COM_MR_YES."</b>";
							}
						$r['EDITLINK']= '<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_template&jomresTemplateFile='.$doc.'">'.$doc.'</a>' ;
						$rows[]=$r;
						}
					}
				}
			}

		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,_JRPORTAL_CANCEL);
		$jrtb .= $jrtbar->spacer();
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'">';
		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_templates.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'rows',$rows);
		$tmpl->displayParsedTemplate();
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}