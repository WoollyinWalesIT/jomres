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

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'">';
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