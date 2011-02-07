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

/**
#
 * Constructs the javascript tab booking details page
 #
* @package Jomres
#
 */
class j02265viewbookingnotes {
	/**
	#
	 * Constructor: Constructs the javascript tab booking details page
	#
	 */
	function j02265viewbookingnotes()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		$task 				= get_showtime('task');
		if ($task=="editBooking" && $thisJRUser->userIsManager )
			{
			$pageoutput=array();
			$output=array();
			$r=array();
			$defaultProperty=getDefaultProperty();
			$contract_uid	=	jomresGetParam( $_REQUEST, 'contract_uid', 0 );
			if ($contract_uid == 0)
				return;
			$query="SELECT id,timestamp,note FROM #__jomcomp_notes WHERE contract_uid = '".(int)$contract_uid."' AND property_uid = '".(int)$defaultProperty."'";
			
			$bookingData  = doSelectSql($query);
			if (count($bookingData)==0)
				return;
			foreach ($bookingData as $d)
				{
				$r['NOTE']=$d->note;
				$r['DATETIME']=$d->timestamp;
				$r['EDITLINK']=makePopupLink(JOMRES_SITEPAGE_URL."&task=editnote&popup=1&note_id=".$d->id,jr_gettext('_JOMCOMP_BOOKINGNOTES_EDIT',_JOMCOMP_BOOKINGNOTES_EDIT,$editable=false,$isLink=true));
				$r['DELETELINK']='<a href='.JOMRES_SITEPAGE_URL.'&task=deletenote&popup=1&note_id='.$d->id.'&contract_uid='.$contract_uid.'>'.jr_gettext('_JOMCOMP_BOOKINGNOTES_DELETE',_JOMCOMP_BOOKINGNOTES_DELETE,$editable=false,$isLink=true).'</a>';
				$rows[]=$r;
				}
			$tmpl = new patTemplate();
			
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->addRows( 'rows', $rows );
			$tmpl->readTemplatesFromInput( 'view_notes.html' );
			$this->notesoutput = $tmpl->getParsedTemplate();
			
			}
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMCOMP_BOOKINGNOTES_EDIT',_JOMCOMP_BOOKINGNOTES_EDIT);
		$output[]		=jr_gettext('_JOMCOMP_BOOKINGNOTES_DELETE',_JOMCOMP_BOOKINGNOTES_DELETE);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->notesoutput;
		}
	}
?>