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

class j16000listPfeaturesCategories
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		$ePointFilepath = get_showtime('ePointFilepath');
		$editIcon = '<img src="'.get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/EditItem.png" border="0" />';
		
		$jrportal_taxrate = jomres_singleton_abstract::getInstance( 'jrportal_taxrate' );

		$output['PAGETITLE'] = jr_gettext("_JOMRES_PROPERTYFEATURES_HCATEGORIES",_JOMRES_PROPERTYFEATURES_HCATEGORIES,false);

		$output['HTITLE'] = jr_gettext("_JRPORTAL_CRATE_TITLE",_JRPORTAL_CRATE_TITLE,false);
		
		$query = "SELECT `id`, `title` FROM #__jomres_hotel_features_categories ";
		$result = doSelectSql($query);

		$rows = array();
		
		if ( count($result) > 0 )
			{
			foreach($result as $c)
				{
				$r=array();
				
				if (!using_bootstrap())
					{
					$r['EDITLINK'] = '<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=editPfeatureCategory&id='.$c->id.'">'.$editIcon.'</a>';
					}
				else
					{
					$toolbar = jomres_singleton_abstract::getInstance( 'jomresItemToolbar' );
					$toolbar->newToolbar();
					$toolbar->addItem( 'fa fa-pencil-square-o', 'btn btn-info', '', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . '&task=editPfeatureCategory&id=' . $c->id ), jr_gettext( 'COMMON_EDIT', COMMON_EDIT, false ) );
					$toolbar->addSecondaryItem( 'fa fa-trash-o', '', '', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . '&task=deletePfeatureCategory&id=' . $c->id ), jr_gettext( 'COMMON_DELETE', COMMON_DELETE, false ) );
					
					$r['EDITLINK'] = $toolbar->getToolbar();
					}
				
				$r['TITLE'] = $c->title;
				$r['ID'] = $c->id;
				
				$rows[]=$r;
				}
			}

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid("/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/AddItem.png");
		$link = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem('editPfeatureCategory',$link,$text="Add",$submitOnClick=true,$submitTask="editPfeatureCategory",$image);
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,jr_gettext("_JRPORTAL_CANCEL",_JRPORTAL_CANCEL,false));
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_pfeatures_categories.html');
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