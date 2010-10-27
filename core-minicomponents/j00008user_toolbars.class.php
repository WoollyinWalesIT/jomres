<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j00008user_toolbars {
	function j00008user_toolbars($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		$componentArgs=array();
		$output=array();
		$query="SELECT propertys_uid FROM #__jomres_propertys WHERE published='1'";
		$publishedProperties = count(doSelectSql($query));
		$output['PUBLISHEDPROPERTIESTXT']=jr_gettext('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES',_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES,$editable=false,$isLink=false);
		$output['PUBLISHEDPROPERTIES']=$publishedProperties;
		$output['TITLE']=jr_gettext('_JOMCOMP_MYUSER_MENUTITLE',_JOMCOMP_MYUSER_MENUTITLE,$editable=false,$isLink=false);

		$componentArgs['thisJRUser']=$thisJRUser;
		$MiniComponents->triggerEvent('00009',$componentArgs); //
		$mcOutput=$MiniComponents->getAllEventPointsData('00009');
		$counter=0;
		foreach ($mcOutput as $key=>$val)
			{
			if ($mcOutput[$key] != "" && $mcOutput[$key] != null)
				$counter++;
			}
		if ($counter>0)
			{
			foreach ($mcOutput as $key=>$val)
				{
				$r=array();
				$r["OPTIONS"]=$val;
				$rows[]=$r;
				}

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'toolbar_guest.html');
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->addRows( 'rows',$rows);
			$tmpl->displayParsedTemplate();
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