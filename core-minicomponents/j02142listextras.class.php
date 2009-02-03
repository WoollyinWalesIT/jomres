<?php
/**
#
 * Mini-component core file: Constructs and displays extras list
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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $mrConfig,$jomresConfig_live_site,$Itemid;
		$defaultProperty=getDefaultProperty();
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

			$jrtbar = new jomres_toolbar();
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem('edit',jomresURL("index.php?option=com_jomres&task=editExtra&Itemid=$Itemid&uid=".$ex->uid ),'');
			if ($published)
				$jrtb .= $jrtbar->toolbarItem('publish',jomresURL("index.php?option=com_jomres&task=publishExtra".jomresURLToken()."&no_html=1&Itemid=$Itemid&uid=".$ex->uid ),'');
			else
				$jrtb .= $jrtbar->toolbarItem('unpublish',jomresURL("index.php?option=com_jomres&task=publishExtra".jomresURLToken()."&no_html=1&Itemid=$Itemid&uid=".$ex->uid ),'');
			$jrtb .= $jrtbar->endTable();
			$rw['EDITLINK']=$jrtb;

			$rw['EXNAME']=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRANAME'.$ex->uid, htmlspecialchars(trim(stripslashes($ex->name)), ENT_QUOTES) );
			$rw['EXDESC']=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRADESC'.$ex->uid, htmlspecialchars(trim(stripslashes($ex->desc)), ENT_QUOTES) );
			$rw['EXPRICE']=number_format($ex->price,2);
			//$rw['PUBLISHLINK']='<a href="'.jomresURL("index.php?option=com_jomres&task=publishExtra&Itemid=$Itemid&uid=".($ex->uid) ).'"><img src="'.$img.'" border="0"></a>';
			$rw['CURRENCY']=$mrConfig['currency'];
			$rows[]=$rw;
			}
		$output['PAGETITLE']=jr_gettext('_JOMRES_COM_MR_EXTRA_TITLE',_JOMRES_COM_MR_EXTRA_TITLE);
		$output['ITEMID']=$Itemid;

		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('new',jomresURL("index.php?option=com_jomres&task=editExtra&Itemid=$Itemid"),'');
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL("index.php?option=com_jomres&task=listBlackBookings&Itemid=$Itemid"),'');
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