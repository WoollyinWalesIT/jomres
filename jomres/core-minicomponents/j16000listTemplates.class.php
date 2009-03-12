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

		$output=array();

		$output['TITLE']=_JOMRES_COM_TEMPLATEEDITING_TITLE;
		$output['INSTRUCTIONS']=_JOMRES_COM_TEMPLATEEDITING_DESC;
		
		$output['HTEMPLATENAME']=_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME;
		$output['HCUSTOMISED']=_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED;
		
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
				if( substr($entry,0,1) != '.' )
					{
					$docs[] =$entry;
					}
				}
			$d->close();
			if (count($docs)>0)
				{
				natsort($docs);
				foreach ($docs as $doc)
					{
					$r=array();
					$r['EDITED']=_JOMRES_COM_MR_NO;
					if ($custom_templates->hasThisTemplateBeenCustomised($doc))
						$r['EDITED']="<b>"._JOMRES_COM_MR_YES."</b>";
			
					$r['EDITLINK']= '<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_template&jomresTemplateFile='.$doc.'">'.$doc.'</a>' ;
					$rows[]=$r;
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