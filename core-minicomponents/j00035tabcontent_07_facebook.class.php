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

class j00035tabcontent_07_facebook
	{
	function __construct( $componentArgs )
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$property_uid = (int) $componentArgs[ 'property_uid' ];
		$mrConfig     = getPropertySpecificSettings( $property_uid );

		if ( $mrConfig[ 'is_real_estate_listing' ] == 0 )
			{
			$componentArgs[ 'output_now' ] = false;
			
			$tabTitle = jr_gettext( '_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', '_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', false, false );
			
			$anchor = jomres_generate_tab_anchor( $tabTitle );

			$tab           = array ( "TAB_ANCHOR" => $anchor, "TAB_TITLE" => $tabTitle, "TAB_CONTENT" => $MiniComponents->specificEvent( '06000', 'show_facebook_page',array('output_now'=>false, 'property_uid'=>$property_uid)) , "TAB_ID" => 'tour_target_facebook' );
			$this->retVals = $tab;
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
		return $this->retVals;
		}

	}

?>