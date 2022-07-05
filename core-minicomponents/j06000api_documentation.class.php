<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
     * Builds the API documention page
	 * 
	 */

class j06000api_documentation
	{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	function __construct()
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			$this->shortcode_data = array (
				"task" => "api_documentation",
				"info" => "_JOMRES_SHORTCODES_06000API_CORE_DOCS",
				"arguments" => array ()
				);
			return;
			}

		$ePointFilepath=get_showtime('ePointFilepath');
		$ePointLiveSite=get_showtime('eLiveSite')."/templates/".find_plugin_template_directory()."/";
		$path = JOMRES_TEMPLATEPATH_FRONTEND;
		$output = array();
		$pageoutput = array();
		
		$output['EPOINTLIVESITE'] = $ePointLiveSite;
		$output['CONTENTS'] = file_get_contents($path.JRDS."api_documentation_contents.html");
/* 		$methods =  file_get_contents($ePointFilepath.JRDS."api_doc.html");
		
		$output['CONTENTS'] = str_replace( "[METHODS]" ,$methods , $output['CONTENTS'] ); */
		$output['CONTENTS'] = str_replace( "[LIVE_SITE]" , get_showtime("live_site") , $output['CONTENTS'] );

		$output['SIDEBAR'] = file_get_contents($path.JRDS."api_documentation_sidebar.html");

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( $path );
		$tmpl->readTemplatesFromInput( 'api_documentation_index.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->displayParsedTemplate();
		}




	function getRetVals()
		{
		return null;
		}
	}