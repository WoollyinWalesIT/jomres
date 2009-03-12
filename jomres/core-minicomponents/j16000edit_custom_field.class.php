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

class j16000edit_custom_field {
	function j16000edit_custom_field()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$output=array();
		$uid		= intval(jomresGetParam( $_REQUEST, 'uid', 0 ));

		$output['HFIELD']=_JOMRES_COM_CUSTOMFIELDS_FIELDNAME;
		$output['HDEFAULT_VALUE']=_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE;
		$output['HDESCRIPTION']=_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION;
		$output['HREQUIRED']=_JOMRES_COM_CUSTOMFIELDS_REQUIRED;
		
			
		$yesno = array();
		$yesno[] = jomresHTML::makeOption( '0', _JOMRES_COM_MR_NO );
		$yesno[] = jomresHTML::makeOption( '1', _JOMRES_COM_MR_YES );
			
		$custom_fields = new jomres_custom_field_handler();
		$allCustomFields = $custom_fields->getAllCustomFields();
		
		$thisField = $allCustomFields[$uid];

		$output['FIELDNAME']=$thisField['fieldname'];
		$output['DEFAULT_VALUE']=$thisField['default_value'];
		$output['DESCRIPTION']=$thisField['description'];
		$output['REQUIRED']=jomresHTML::selectList( $yesno, 'required','class="inputbox" size="1"', 'value', 'text', $thisField['required']);
		$output['UID']=$thisField['uid'];
		
		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','','',true,'save_custom_field');
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN."&task=listCustomFields",'');
		if ($uid>0)
			$jrtb .= $jrtbar->toolbarItem('delete',JOMRES_SITEPAGE_URL_ADMIN."&task=delete_custom_field".jomresURLToken()."&no_html=1&uid=".$uid,'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1">';
		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_custom_field.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->displayParsedTemplate();
		
		
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>