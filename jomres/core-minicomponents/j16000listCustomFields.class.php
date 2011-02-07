<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000listCustomFields
	{
	function j16000listCustomFields()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		$output=array();

		$output['TITLE']=_JOMRES_COM_CUSTOMFIELDS_TITLE;
		$output['INSTRUCTIONS']=_JOMRES_COM_CUSTOMFIELDS_DESC;

		$output['HFIELDNAME']=_JOMRES_COM_CUSTOMFIELDS_FIELDNAME;
		$output['HDEFAULTVALUE']=_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE;
		$output['HDESCRIPTION']=_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION;
		$output['HREQUIRED']=_JOMRES_COM_CUSTOMFIELDS_REQUIRED;
		
		jr_import('jomres_custom_field_handler');
		$custom_fields = new jomres_custom_field_handler();
		$allCustomFields = $custom_fields->getAllCustomFields();
		
		if (count ($allCustomFields)>0)
			{
			foreach ($allCustomFields as $field)
				{
				$r=array();
				$r['REQUIRED']=_JOMRES_COM_MR_NO;
				if ($field['required']==1)
					$r['REQUIRED']="<b>"._JOMRES_COM_MR_YES."</b>";

				$r['DEFAULT_VALUE']=$field['default_value'];
				$r['DESCRIPTION']=$field['description'];

				$r['EDITLINK']= '<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_custom_field&uid='.$field['uid'].'">'.$field['fieldname'].'</a>' ;
				$rows[]=$r;
				}
			}


		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/AddItem.png");
		$link = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem('edit_custom_field',$link,_JOMRES_COM_MR_NEWTARIFF,$submitOnClick=true,$submitTask="edit_custom_field",$image);
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,_JRPORTAL_CANCEL);
		$jrtb .= $jrtbar->spacer();
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'" />';
		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_custom_fields.html');
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