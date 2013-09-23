<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


class j06005muviewfavourites
	{
	function j06005muviewfavourites()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();

		if ( $thisJRUser->userIsRegistered )
			{
			$customTextObj = jomres_singleton_abstract::getInstance( 'custom_text' );
			$pageoutput    = array ();
			$output        = array ();
			$rows          = array ();
			$r             = array ();
			$fav           = array ();

			$query      = "SELECT property_uid FROM #__jomcomp_mufavourites WHERE my_id = '" . (int) $thisJRUser->id . "'";
			$favourites = doSelectSql( $query );
			if ( count( $favourites ) > 0 )
				{
				foreach ( $favourites as $prop )
					{
					$fav[ ] = $prop->property_uid;
					}
				$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
				$current_property_details->gather_data_multi( $fav );
				
				$jomres_media_centre_images = jomres_singleton_abstract::getInstance( 'jomres_media_centre_images' );
				$jomres_media_centre_images->get_images_multi($fav, array('property'));

				$output[ 'HPNAME' ]                         = jr_gettext( '_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', _JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME, $editable = false, $isLink = false );
				$counter                                    = 0;
				$output[ 'HPTYPES' ]                        = jr_gettext( '_JOMCOMP_MYUSER_PROPERTYTYPE', _JOMCOMP_MYUSER_PROPERTYTYPE, $editable = false, $isLink = false );
				$output[ '_JOMCOMP_MYUSER_VIEWFAVOURITES' ] = jr_gettext( '_JOMCOMP_MYUSER_VIEWFAVOURITES', _JOMCOMP_MYUSER_VIEWFAVOURITES );

				foreach ( $fav as $f )
					{
					$customTextObj->get_custom_text_for_property( $f );
					$r[ 'PROPERTYNAME' ] = getPropertyName( $f );

					$r[ 'PROP_STREET' ]   = $current_property_details->multi_query_result[ $f ][ 'property_street' ];
					$r[ 'PROP_TOWN' ]     = $current_property_details->multi_query_result[ $f ][ 'property_town' ];
					$r[ 'PROP_POSTCODE' ] = $current_property_details->multi_query_result[ $f ][ 'property_postcode' ];
					$r[ 'PROP_REGION' ]   = $current_property_details->multi_query_result[ $f ][ 'property_region' ];
					$r[ 'PROP_COUNTRY' ]  = $current_property_details->multi_query_result[ $f ][ 'property_country' ];
					$r[ 'PROP_TEL' ]      = $current_property_details->multi_query_result[ $f ][ 'property_tel' ];

					$r[ 'TYPE' ] = $current_property_details->multi_query_result[ $f ][ 'property_type_title' ];
					
					$jomres_media_centre_images->get_images($f, array('property'));
					$r[ 'IMAGE' ] = jomres_make_image_popup( $r[ 'PROPERTYNAME' ], $jomres_media_centre_images->images ['property'][0][0]['large'], "", array (), $jomres_media_centre_images->images ['property'][0][0]['small'] );

					$r[ 'PROPERTYDETAILSLINK' ] = JOMRES_SITEPAGE_URL . '&task=viewproperty&property_uid=' . $f;
					$r[ 'REMOVELINK' ]          = JOMRES_SITEPAGE_URL . '&task=muremovefavourite&no_html=1&property_uid=' . $f;
					$r[ 'REMOVETEXT' ]          = jr_gettext( '_JOMCOMP_MYUSER_REMOVE', _JOMCOMP_MYUSER_REMOVE, false, false );

					$rows[ ] = $r;
					}

				$pageoutput[ ] = $output;
				$tmpl          = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$tmpl->addRows( 'rows', $rows );
				$tmpl->readTemplatesFromInput( 'view_favourites.html' );
				$tmpl->displayParsedTemplate();
				}
			else
				{
				echo jr_gettext( '_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', _JOMCOMP_MYUSER_VIEWFAVOURITES_NONE, $editable = false, $isLink = false );
				}
			}
		}

	function touch_template_language()
		{
		$output = array ();

		$output[ 'H1' ]      = jr_gettext( '_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', _JOMCOMP_MYUSER_VIEWFAVOURITES_NONE );
		$output[ 'HPTYPES' ] = jr_gettext( '_JOMCOMP_MYUSER_PROPERTYTYPE', _JOMCOMP_MYUSER_PROPERTYTYPE );
		$output[ 'HPNAME' ]  = jr_gettext( '_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', _JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME );
		$r[ 'REMOVETEXT' ]   = jr_gettext( '_JOMCOMP_MYUSER_REMOVE', _JOMCOMP_MYUSER_REMOVE );
		foreach ( $output as $o )
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