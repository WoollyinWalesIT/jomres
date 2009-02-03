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

/**
#
 * Constructs the javascript tab booking details page
 #
* @package Jomres
#
 */
class j00050mumenu {
	/**
	#
	 * Constructor: Constructs the javascript tab booking details page
	#
	 */
	function j00050mumenu($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $jomresConfig_live_site,$Itemid,$popup,$task;
		global $jomresConfig_lang;
		$thisJRUser=$componentArgs['thisJRUser'];
		$no_html			= jomresGetParam( $_REQUEST, 'no_html', 0 );
		$property_uid		= jomresGetParam( $_REQUEST, 'property_uid', 0 );
		if ($thisJRUser->userIsRegistered && $no_html ==0 && $popup !=1)
			{
			$query="SELECT property_uid FROM #__jomcomp_mufavourites WHERE property_uid = '".(int)$property_uid."' AND id='".(int)$thisJRUser->id."'";
			$favourites=doSelectSql($query);
			// To add an option to the users menu, we will add the element to the outputArray, which will be reconstructed later on for output to the user menu.
			$outputArray=array();
			$outputArray[]=array('task'=>'mulistbookings','text'=>jr_gettext('_JOMCOMP_MYUSER_LISTBOOKINGS',_JOMCOMP_MYUSER_LISTBOOKINGS,$editable=false,$isLink=false),'args'=>'');
			$outputArray[]=array('task'=>'muviewfavourites','text'=>jr_gettext('_JOMCOMP_MYUSER_VIEWFAVOURITES',_JOMCOMP_MYUSER_VIEWFAVOURITES,$editable=false,$isLink=false),'args'=>'');
			if ($task=='viewproperty' && count($favourites)==0)
				$outputArray[]=array('task'=>'muaddtofavourites','text'=>jr_gettext('_JOMCOMP_MYUSER_ADDTOFAVOURITES',_JOMCOMP_MYUSER_ADDTOFAVOURITES,$editable=false,$isLink=false),'args'=>'&property_uid='.$property_uid);
			$pageoutput=array();
			$output=array();
			$r=array();
			$query="SELECT propertys_uid FROM #__jomres_propertys WHERE published='1'";
			$publishedProperties = count(doSelectSql($query));
			$output['PUBLISHEDPROPERTIESTXT']=jr_gettext('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES',_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES,$editable=false,$isLink=false);
			$output['PUBLISHEDPROPERTIES']=$publishedProperties;

			$output['TITLE']=jr_gettext('_JOMCOMP_MYUSER_MENUTITLE',_JOMCOMP_MYUSER_MENUTITLE,$editable=false,$isLink=false);
			foreach ($outputArray as $o)
				{
				$r['LIVE_SITE']=$jomresConfig_live_site;
				$r['TASK']=$o['task'];
				$r['TEXT']=$o['text'];
				$r['ARGS']=$o['args'];
				$rows[]=$r;
				}

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->addRows( 'rows', $rows );
			$tmpl->readTemplatesFromInput( 'menus.html' );
			$tmpl->displayParsedTemplate();
			}
		//elseif (!$thisJRUser->userIsRegistered  && $no_html ==0)
			//echo jr_gettext('_JOMCOMP_MYUSER_NOTLOGGEDIN',_JOMCOMP_MYUSER_NOTLOGGEDIN,$editable=false,$isLink=false);
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMCOMP_MYUSER_LISTBOOKINGS',_JOMCOMP_MYUSER_LISTBOOKINGS);
		$output[]		=jr_gettext('_JOMCOMP_MYUSER_VIEWFAVOURITES',_JOMCOMP_MYUSER_VIEWFAVOURITES);
		$output[]		=jr_gettext('_JOMCOMP_MYUSER_ADDTOFAVOURITES',_JOMCOMP_MYUSER_ADDTOFAVOURITES);
		$output[]		=jr_gettext('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES',_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES);
		$output[]		=jr_gettext('_JOMCOMP_MYUSER_MENUTITLE',_JOMCOMP_MYUSER_MENUTITLE);

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
		return null;
		}
	}
?>