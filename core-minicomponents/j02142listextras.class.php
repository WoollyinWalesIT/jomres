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

/**
#
 * List the optional extras
 #
* @package Jomres
#
 */
class j02142listextras {
	/**
	#
	 * Constructor: List the optional extras
	#
	 */
	function j02142listextras()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$mrConfig=getPropertySpecificSettings();
		$defaultProperty=getDefaultProperty();
		$output=array();
		
		$output['HEDITLINK']=jr_gettext('_JOMRES_COM_MR_EXTRA_LINKTEXT',_JOMRES_COM_MR_EXTRA_LINKTEXT,$editable=false,$isLink=true);
		$output['HEXNAME']=jr_gettext('_JOMRES_COM_MR_EXTRA_NAME',_JOMRES_COM_MR_EXTRA_NAME);
		$output['HEXDESC']=jr_gettext('_JOMRES_COM_MR_EXTRA_DESC',_JOMRES_COM_MR_EXTRA_DESC);
		$output['HEXPRICE']=jr_gettext('_JOMRES_COM_MR_EXTRA_PRICE',_JOMRES_COM_MR_EXTRA_PRICE);
		$output['HPUBLISHIMAGE']=jr_gettext('_JOMRES_COM_MR_VRCT_PUBLISHED',_JOMRES_COM_MR_VRCT_PUBLISHED);
		$query="SELECT `uid`,`name`,`desc`,`price`,`property_uid`,`published` FROM `#__jomres_extras` where property_uid like '".(int)$defaultProperty."' ORDER BY name";
		$exList =doSelectSql($query);
		$rows=array();
		foreach($exList as $ex)
			{
			$published=$ex->published;
			if ($published)
				$img = "administrator/images/tick.png";
			else
				$img = "administrator/images/publish_x.png";
			$rw['PUBLISHIMAGE']=$img;

			$jrtbar =jomres_getSingleton('jomres_toolbar');
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem('edit',jomresURL(JOMRES_SITEPAGE_URL."&task=editExtra&uid=".$ex->uid ),'');
			if ($published)
				$jrtb .= $jrtbar->toolbarItem('publish',jomresURL(JOMRES_SITEPAGE_URL."&task=publishExtra".jomresURLToken()."&no_html=1&uid=".$ex->uid ),'');
			else
				$jrtb .= $jrtbar->toolbarItem('unpublish',jomresURL(JOMRES_SITEPAGE_URL."&task=publishExtra".jomresURLToken()."&no_html=1&uid=".$ex->uid ),'');
			$jrtb .= $jrtbar->endTable();
			$rw['EDITLINK']=$jrtb;

			$rw['EXNAME']=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRANAME'.$ex->uid, htmlspecialchars(trim(stripslashes($ex->name)), ENT_QUOTES) );
			$rw['EXDESC']=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRADESC'.$ex->uid, htmlspecialchars(trim(stripslashes($ex->desc)), ENT_QUOTES) );
			$rw['EXPRICE']=output_price($ex->price);
			//$rw['PUBLISHLINK']='<a href="'.jomresURL(JOMRES_SITEPAGE_URL."&task=publishExtra&uid=".($ex->uid) ).'"><img src="'.$img.'" border="0"></a>';
			//$rw['CURRENCY']=$mrConfig['currency'];
			$rows[]=$rw;
			}
		$output['PAGETITLE']=jr_gettext('_JOMRES_COM_MR_EXTRA_TITLE',_JOMRES_COM_MR_EXTRA_TITLE);

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('new',jomresURL(JOMRES_SITEPAGE_URL."&task=editExtra"),'');
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL.""),'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'list_extras.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->displayParsedTemplate();
		}

	function touch_template_language()
		{
		$output=array();


		$output[]		=jr_gettext('_JOMRES_COM_MR_EXTRA_TITLE',_JOMRES_COM_MR_EXTRA_TITLE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EXTRA_LINKTEXT',_JOMRES_COM_MR_EXTRA_LINKTEXT);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EXTRA_NAME',_JOMRES_COM_MR_EXTRA_NAME);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EXTRA_DESC',_JOMRES_COM_MR_EXTRA_DESC);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EXTRA_PRICE',_JOMRES_COM_MR_EXTRA_PRICE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PUBLISHED',_JOMRES_COM_MR_VRCT_PUBLISHED);

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