<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000listTemplates
	{
	function j16000listTemplates()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$output=array();

		$output['TITLE']=_JOMRES_COM_TEMPLATEEDITING_TITLE;
		$output['INSTRUCTIONS']=_JOMRES_COM_TEMPLATEEDITING_DESC;
		
		$output['HTEMPLATENAME']=_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME;
		$output['HCUSTOMISED']=_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED;
		$output['HLAST_EDITED_DB']=_JOMRES_LASTEDITED_DB;
		$output['HLAST_EDITED_DISK']=_JOMRES_LASTEDITED_DISK;
		$output['HLAST_WARNINGICON']=_JOMRES_LASTEDITED_WARNINGICON;
		$output['EDITWARNINGNOTE']=_JOMRES_LASTEDITED_WARNING;
		
		$custom_templates =jomres_getSingleton('jomres_custom_template_handler');

		$frontendTemplatesFolder=JOMRES_TEMPLATEPATH_FRONTEND;
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
				
				$counter=0;
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
						if ($counter%2)
							$r['CLASS']="even";
						else
							$r['CLASS']="odd";
						$rows[]=$r;
						$counter++;
						}
					}
				}
			}

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,_JRPORTAL_CANCEL);
		$jrtb .= $jrtbar->spacer();
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'" />';
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