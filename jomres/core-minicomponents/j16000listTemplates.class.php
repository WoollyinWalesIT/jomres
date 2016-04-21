<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000listTemplates
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
		$output = array ();

		$this->all_property_types = array ();
		$query                    = "SELECT id,ptype FROM #__jomres_ptypes";
		$propertytypes            = doSelectSql( $query );
		if ( count( $propertytypes ) > 0 )
			{
			$this->all_property_types[ 0 ] = jr_gettext( '_JOMRES_SEARCH_ALL', '_JOMRES_SEARCH_ALL', false, false );
			foreach ( $propertytypes as $pt )
				{
				$this->all_property_types[ $pt->id ] = $pt->ptype;
				}
			}

		$output[ 'TITLE' ]        = jr_gettext( "_JOMRES_COM_TEMPLATEEDITING_TITLE", '_JOMRES_COM_TEMPLATEEDITING_TITLE',false );
		$output[ 'INSTRUCTIONS' ] = jr_gettext( "_JOMRES_COM_TEMPLATEEDITING_DESC", '_JOMRES_COM_TEMPLATEEDITING_DESC',false );

		$output[ 'HTEMPLATENAME' ]     = jr_gettext( "_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME", '_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME',false );
		$output[ 'HCUSTOMISED' ]       = jr_gettext( "_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED", '_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED',false );
		$output[ 'HLAST_EDITED_DB' ]   = jr_gettext( "_JOMRES_LASTEDITED_DB", '_JOMRES_LASTEDITED_DB',false );
		$output[ 'HLAST_EDITED_DISK' ] = jr_gettext( "_JOMRES_LASTEDITED_DISK", '_JOMRES_LASTEDITED_DISK',false );
		$output[ 'HLAST_WARNINGICON' ] = jr_gettext( "_JOMRES_LASTEDITED_WARNINGICON", '_JOMRES_LASTEDITED_WARNINGICON',false );
		$output[ 'EDITWARNINGNOTE' ]   = jr_gettext( "_JOMRES_LASTEDITED_WARNING_72", '_JOMRES_LASTEDITED_WARNING_72',false );
		$output[ 'HPTYPE' ]            = jr_gettext( '_JOMRES_COM_PTYPES_PTYPE', '_JOMRES_COM_PTYPES_PTYPE',false );

		$custom_templates = jomres_singleton_abstract::getInstance( 'jomres_custom_template_handler' );

		$cssFolder               = JOMRESPATH_BASE . JRDS . 'css';
		$frontendTemplatesFolder = JOMRES_TEMPLATEPATH_FRONTEND;
		$d                       = @dir( $frontendTemplatesFolder );
		$docs                    = array ();
		$rows                    = array ();
		if ( $d )
			{
			while ( false !== ( $entry = $d->read() ) )
				{
				$filename = $entry;
				if ( substr( $entry, 0, 1 ) != '.' )
					{
					$docs[ ] = $entry;
					}
				}
			$d->close();
			if ( count( $docs ) > 0 )
				{
				natsort( $docs );

				$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
				$jrConfig   = $siteConfig->get();
				if ( _JOMRES_DETECTED_CMS == "joomla32" || _JOMRES_DETECTED_CMS == "joomla33"  || _JOMRES_DETECTED_CMS == "joomla34" || _JOMRES_DETECTED_CMS == "joomla35") 
					$css_file = 'jomrescss_bootstrap.css';
				else
					{
					if ( $jrConfig[ 'use_bootstrap_in_frontend' ] == "1" ) $css_file = 'jomrescss_bootstrap.css';
					else
					$css_file = 'jomrescss.css';
					}

				array_unshift( $docs, $css_file );

				$counter = 0;
				foreach ( $docs as $doc )
					{
					if ( $doc != "srch.html" && trim( $doc ) != "" )
						{
						if ( array_key_exists( $doc, $custom_templates->custom_templates ) )
							{
							foreach ( $custom_templates->custom_templates[ $doc ] as $customised )
								{
								$r                  = array ();
								$r[ 'WARNINGICON' ] = "";

								if ( $doc != "jomrescss_bootstrap.css" && $doc != "jomrescss.css" ) $r[ 'LAST_EDITED_DISK' ] = date( "Y-m-d H:i:s", filemtime( $frontendTemplatesFolder . JRDS . $doc ) );
								else
								$r[ 'LAST_EDITED_DISK' ] = date( "Y-m-d H:i:s", filemtime( $cssFolder . JRDS . $doc ) );

								$query                 = "SELECT `last_edited` FROM #__jomres_custom_templates WHERE `uid` = " . (int) $customised[ 'id' ] . "";
								$r[ 'LAST_EDITED_DB' ] = doSelectSql( $query, 1 );
								if ( $r[ 'LAST_EDITED_DB' ] != "0000-00-00 00:00:00" )
									{
									if ( $r[ 'LAST_EDITED_DISK' ] > $r[ 'LAST_EDITED_DB' ] ) $r[ 'WARNINGICON' ] = jr_gettext( "_JOMRES_LASTEDITED_WARNINGICON_TEXT", '_JOMRES_LASTEDITED_WARNINGICON_TEXT', false );
									}
								else
								$r[ 'LAST_EDITED_DB' ] = jr_gettext( "_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE", '_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE', false );
								$r[ 'EDITED' ]        = "<b>" . jr_gettext( "_JOMRES_COM_MR_YES", '_JOMRES_COM_MR_YES' ) . "</b>";
								$r[ 'TEMPLATENAME' ]  = $doc;
								$ptype_id             = $customised[ 'ptype_id' ];
								$r[ 'PROPERTY_TYPE' ] = $this->all_property_types[ $ptype_id ];
								if ( $counter % 2 ) $r[ 'CLASS' ] = "even";
								else
								$r[ 'CLASS' ] = "odd";


								$o               = array ();
								$p               = array ();
								$o[ 'EDITLINK' ] = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=edit_template&id=' . $customised[ 'id' ] . '">' . jr_gettext( 'COMMON_EDIT', 'COMMON_EDIT', false ) . '</a>';

								$o[ 'COPYLINK' ]   = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=edit_template&id=' . $customised[ 'id' ] . '&copy=1">' . jr_gettext( 'COMMON_COPY', 'COMMON_COPY', false ) . '</a>';
								$o[ 'NEWLINK' ]    = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=edit_template&jomresTemplateFile=' . $doc . '" class="btn">' . jr_gettext( 'COMMON_NEW', 'COMMON_NEW', false ) . '</a>';
								$o[ 'DELETELINK' ] = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . "&task=delete_template&no_html=1&id=" . $customised[ 'id' ] . '" class="btn">' . jr_gettext( 'COMMON_DELETE', 'COMMON_DELETE', false ) . '</a>';
								$o[ 'EDITURL' ]    = JOMRES_SITEPAGE_URL_ADMIN . '&task=edit_template&id=' . $customised[ 'id' ];
								$o[ 'COPYURL' ]    = JOMRES_SITEPAGE_URL_ADMIN . '&task=edit_template&id=' . $customised[ 'id' ] . '&copy=1';
								$o[ 'NEWURL' ]     = JOMRES_SITEPAGE_URL_ADMIN . '&task=edit_template&jomresTemplateFile=' . $doc;
								$o[ 'DELETEURL' ]  = JOMRES_SITEPAGE_URL_ADMIN . "&task=delete_template&no_html=1&id=" . $customised[ 'id' ];

								$p[ ] = $o;
								$tmpl = new patTemplate();
								$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
								if ( $doc != "jomrescss_bootstrap.css" && $doc != "jomrescss.css" ) $tmpl->readTemplatesFromInput( 'list_templates_edit_dropdown_edit.html' );
								else
								$tmpl->readTemplatesFromInput( 'list_templates_edit_dropdown_edit_css.html' );
								$tmpl->addRows( 'pageoutput', $p );
								$editlinks         = $tmpl->getParsedTemplate();
								$r[ 'EDIT_LINKS' ] = $editlinks;

								$rows[ ] = $r;
								$counter++;
								}
							}
						else
							{
							$r             = array ();
							$r[ 'EDITED' ] = jr_gettext( "_JOMRES_COM_MR_NO", '_JOMRES_COM_MR_NO', false );

							$r[ 'TEMPLATENAME' ] = $doc;
							if ( $counter % 2 ) $r[ 'CLASS' ] = "even";
							else
							$r[ 'CLASS' ] = "odd";

							$o              = array ();
							$p              = array ();
							$o[ 'NEWLINK' ] = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=edit_template&jomresTemplateFile=' . $doc . '">' . $doc . '</a>';
							$o[ 'NEWURL' ]  = JOMRES_SITEPAGE_URL_ADMIN . '&task=edit_template&jomresTemplateFile=' . $doc;
							$p[ ]           = $o;
							$tmpl           = new patTemplate();
							$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
							$tmpl->readTemplatesFromInput( 'list_templates_edit_dropdown_new.html' );
							$tmpl->addRows( 'pageoutput', $p );
							$editlinks         = $tmpl->getParsedTemplate();
							$r[ 'EDIT_LINKS' ] = $editlinks;

							$rows[ ] = $r;
							$counter++;
							}
						}
					}
				}
			}

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN, jr_gettext( "_JRPORTAL_CANCEL", '_JRPORTAL_CANCEL', false ) );
		$jrtb .= $jrtbar->spacer();
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_templates.html' );
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