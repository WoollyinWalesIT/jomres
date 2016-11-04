<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06000media_centre
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}

		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if (!$thisJRUser->userIsManager)
			{
			return;
			}

		// Let's the appropriate upload context details
		$MiniComponents->triggerEvent( '07100' );  // As the upload context is relevant to neither the frontend or backend, it is numbered in the 07000s
		$upload_context = get_showtime ( "upload_context");

		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();

		$output = array();
		$pageoutput = array();

		$result = $MiniComponents->triggerEvent( $upload_context [ 'resource_type_gathering_trigger' ] );
		$resource_types = $MiniComponents->miniComponentData[ $upload_context [ 'resource_type_gathering_trigger' ] ];

		if (count($resource_types)>0)
			{
			$resource_type_options    = array ();

			foreach ( $resource_types as $type)
				{
				if (isset($type['name']) && $type['name'] != '')
					{
					$resource_type_options[ ] = jomresHTML::makeOption( $type['resource_type'], $type['name'] );
					if (isset($type['notes']))
						{
						$notes[] = array ( "NOTE" => $type['notes'] );
						}
					}
				}
			$javascript      = 'onchange="get_resource_ids_for_resource_type(this.value);"';

			$output['RESOURCE_TYPE_OPTIONS']=jomresHTML::selectList( $resource_type_options, 'resource_types', ' autocomplete="off" class="inputbox" size="1" ' . $javascript . '', 'value', 'text', '' , false);

			$output['_JOMRES_MEDIA_CENTRE_BUTTON_ADD']                  = jr_gettext( '_JOMRES_MEDIA_CENTRE_BUTTON_ADD', '_JOMRES_MEDIA_CENTRE_BUTTON_ADD', false );
			$output['MAX_WIDTH']                                        = $jrConfig[ 'maxwidth' ];
			$output['TITLE']                                            = jr_gettext( '_JOMRES_MEDIA_CENTRE_TITLE', '_JOMRES_MEDIA_CENTRE_TITLE', false );
			$output['UPLOAD_CONTEXT_TITLE']                             = $upload_context [ 'upload_context_title' ];
			$output['_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS'] = jr_gettext( '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', false );
			$output['_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS']       = jr_gettext( '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS', '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS', false );
			$output['_JOMRES_MEDIA_CENTRE_CLEAR']                       = jr_gettext( '_JOMRES_MEDIA_CENTRE_CLEAR', '_JOMRES_MEDIA_CENTRE_CLEAR', false );
			$output['_JOMRES_MEDIA_CENTRE_DRAGNDROP']                   = jr_gettext( '_JOMRES_MEDIA_CENTRE_DRAGNDROP', '_JOMRES_MEDIA_CENTRE_DRAGNDROP', false );
			$output['_JOMRES_MEDIA_CENTRE_BUTTON_DELETE']               = jr_gettext( '_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', '_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', false );
			$output['_JOMRES_MEDIA_CENTRE_BUTTON_VIEW']                 = jr_gettext( '_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', '_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', false );
			$output['_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD']               = jr_gettext( '_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', '_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', false );
			$output['URL_CONTEXT']                                      = $upload_context [ 'url_context' ];
			$output['ALLOWED_FILE_TYPES']                               = $upload_context [ 'allowed_file_types' ];
			$output['_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL']           = jr_gettext( '_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', '_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', false );
			$output['HUPLOAD_FORM']							           	= jr_gettext( '_JOMRES_UPLOAD_IMAGE', '_JOMRES_UPLOAD_IMAGE', false );
			
			
			if (!jomres_cmsspecific_areweinadminarea())
				{
				$output['AJAX_URL'] = JOMRES_SITEPAGE_URL_AJAX ;
				}
			else
				{
				$output['AJAX_URL'] = JOMRES_SITEPAGE_URL_ADMIN_AJAX;
				}
			
			
			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			
			if (jomres_cmsspecific_areweinadminarea())
				{
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
				}
			else
				{
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
				}

			$tmpl->readTemplatesFromInput( 'media_centre_main.html');
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->addRows( 'notes',$notes);
			$tmpl->displayParsedTemplate();
			}
		else
			echo "Error, no resource types can be found in the resource types array in the media centre. The 03379 scripts must be missing";
			
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