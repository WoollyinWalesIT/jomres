<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.16.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000list_users
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}
		
		$output	 = array ();
		$rows	   = array ();
		$pageoutput = array ();

		$output[ 'HLEGEND' ] 					   					   	= jr_gettext( '_JOMRES_HLEGEND', '_JOMRES_HLEGEND',false );
		$output[ '_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE' ]			  	= jr_gettext( '_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', '_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE',false );
		$output[ '_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED' ] 	= jr_gettext( '_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', '_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED',false );
		$output[ 'HACCESSLEVEL' ]	   								= jr_gettext( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL',false );
		$output[ 'HUSERNAME' ]		   								= jr_gettext( '_JOMRES_COM_MR_ASSIGNUSER_USERNAME', '_JOMRES_COM_MR_ASSIGNUSER_USERNAME',false );

		$jomres_users = jomres_singleton_abstract::getInstance('jomres_users');
		$jomres_users->get_users();
		
		foreach ( $jomres_users->users as $u )
			{
			$r = array ();

			switch($u['access_level'])
				{
				case 50: //receptionist
					$r[ 'LABEL_CLASS' ] = 'label-teal';
					$r[ 'ACCESSLEVEL' ] = 'Receptionist';
					break;
				case 70: //manager
					$r[ 'LABEL_CLASS' ] = 'label-blue';
					$r[ 'ACCESSLEVEL' ] = 'Property Manager';
					break;
				case 90: //super property manager
					$r[ 'LABEL_CLASS' ] = 'label-purple';
					$r[ 'ACCESSLEVEL' ] = 'Super Property Manager';
					break;
				default:
					$r[ 'LABEL_CLASS' ] = 'label-grey';
					$r[ 'ACCESSLEVEL' ] = 'No management access';
					break;
				}
			
			if ( $u['suspended'] == 1 ) 
				{
				$r[ 'LABEL_CLASS' ] = 'label-red';
				}
			
			if ( $u['username'] == '' ) 
				{
				$r[ 'LABEL_CLASS' ] = 'label-orange';
				}
			
			if ( $u['access_level'] > 0 )
				{
				$toolbar = jomres_singleton_abstract::getInstance( 'jomresItemToolbar' );
				$toolbar->newToolbar();
				$toolbar->addItem( 'fa fa-pencil-square-o', 'btn btn-info', '', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . '&task=edit_user&cms_user_id=' . $u['cms_user_id'] ), jr_gettext( 'COMMON_EDIT', 'COMMON_EDIT', false ) );
				
				if ( $u['access_level'] < 90 )
					{
					if ( $u['suspended'] == 1 ) 
						{
						$toolbar->addSecondaryItem( 'fa fa-ban', '', '', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . '&task=unsuspend_user&cms_user_id=' . $u['cms_user_id'] ), 'Unsuspend' );
						}
					else
						{
						$toolbar->addSecondaryItem( 'fa fa-ban', '', '', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . '&task=suspend_user&cms_user_id=' . $u['cms_user_id'] ), 'Suspend' );
						}
					}
				
				$toolbar->addSecondaryItem( 'fa fa-trash-o', '', '', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . '&task=delete_user&cms_user_id=' . $u['cms_user_id'] ), jr_gettext( 'COMMON_DELETE', 'COMMON_DELETE', false ) );
				
				$r['LINKTEXT'] = $toolbar->getToolbar();
				}
			else
				$r[ 'LINKTEXT' ] = "";

			if ($u['username'] != '')
				$r[ 'USERNAME' ]	   = $u['username'];
			else
				$r[ 'USERNAME' ]	   = '-';
			
			$r[ 'NUMBEROFPROPERTIES' ] = count($u['authorised_properties']);
			$r[ 'API_KEY' ] 		   = $u['apikey'];
			
			$rows[] = $r;
			}
		
		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		
		$image = $jrtbar->makeImageValid(JOMRES_IMAGES_RELPATH.'jomresimages/small/AddItem.png');
		
		$jrtb .= $jrtbar->customToolbarItem('edit',JOMRES_SITEPAGE_URL_ADMIN, $text=jr_gettext('COMMON_NEW', 'COMMON_NEW', false), $submitOnClick=true, $submitTask="edit_user", $image);
		$jrtb .= $jrtbar->toolbarItem('cancel', JOMRES_SITEPAGE_URL_ADMIN, jr_gettext("COMMON_CANCEL",'COMMON_CANCEL',false) );
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_users.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->displayParsedTemplate();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
