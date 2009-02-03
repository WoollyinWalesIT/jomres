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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################


class j06000editnote {
	function j06000editnote()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $Itemid;

		$defaultProperty=getDefaultProperty();
		$pageoutput=array();
		$output=array();
		$note_id				= jomresGetParam( $_REQUEST, 'note_id', 0 );
		if ($note_id==0)
			return;

		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','','',true,'savenote');
		$jrtb .= $jrtbar->toolbarItem('cancel','javascript:window.close();','');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$query="SELECT `note` FROM #__jomcomp_notes WHERE `id`='".(int)$note_id."' AND `property_uid`='".(int)$defaultProperty."' LIMIT 1";
		$output['NOTE']= doSelectSql($query,1);
		$output['HNEWTEXT']=jr_gettext('_JOMCOMP_BOOKINGNOTES_EDIT',_JOMCOMP_BOOKINGNOTES_EDIT);
		$output['NOTE_ID']= $note_id;

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1">';

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->readTemplatesFromInput( 'edit_note.html' );
		$tmpl->displayParsedTemplate();
		}

	function touch_template_language()
		{
		$output=array();

		$output[]	=jr_gettext('_JOMCOMP_BOOKINGNOTES_EDIT',_JOMCOMP_BOOKINGNOTES_EDIT);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>