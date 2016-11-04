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

class j06000show_facebook_buttons
	{
	function __construct( $componentArgs = null )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
			
		if (isset($componentArgs[ 'property_uid' ]))
			$property_uid = (int) $componentArgs[ 'property_uid' ];
		elseif ( isset ( $_REQUEST['property_uid'] ))
			$property_uid = (int) $_REQUEST['property_uid'];
		else return;
		
		if (!user_can_view_this_property($property_uid))
			return;
		
		if (isset($componentArgs[ 'output_now' ]))
			$output_now = $componentArgs[ 'output_now' ];
		else
			$output_now = true;
		
		$ePointFilepath = get_showtime('ePointFilepath');
		$mrConfig           = getPropertySpecificSettings($property_uid);
		
		$output     = array ();
		$pageoutput = array ();
		
		$output['DIRECT_URL']= jomresURL( JOMRES_SITEPAGE_URL . "&task=viewproperty&property_uid=" . $property_uid );
		
		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();

		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->readTemplatesFromInput( 'show_facebook_buttons.html' );
		$this->retVals = $tmpl->getParsedTemplate();
		
		if ( $output_now ) 
			echo $this->retVals;
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}
