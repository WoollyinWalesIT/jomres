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

class j16000about_jomres
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
		if ( !using_bootstrap() )
			{
			$class = "ui-widget-content ui-corner-all";
			$style = "margin-left:5px;margin-right:5px;";
			}
		else
			{
			$class = "";
			$style = "";
			}

		echo '
		<h2 class=page-header>About Jomres</h2>
		<div class="' . $class . '" style="width:100%;">
		<div style="' . $style . '">
		<p><a href="https://www.jomres.net" target="_blank">Jomres</a> is (probably) Joomla\'s favourite booking system.</p>
		<p>Developed and maintained by Vince Wooll and <a href="http://www.jomres-extras.com/" target="_blank">Aladar Barthi</a>, it was initially concieved in early 2005 as a Mambo based solution to a client\'s hotel management needs. While it wasn\'t originally expected to be an online booking system it quickly morphed into one as users requested more and more features.</p>
		<p>As the number of feature requests grew Vince knew that he would need to dedicate more time to the project and in July 2005 Jomres was formally released as a commercial project. Since then Jomres has become one of Mambo and now Joomla\'s longest running projects, having survived various versions of Mambo, then Joomla 1.0, 1.5, 1.6, 1.7, 2.5 and 3.</p>
		<p>Jomres further stamps it\'s reputation of being the CMS\'s booking system of choice by adding Wordpress to the list of CMS that it can be installed in.</p>
		<p>Over the years it has seen many new evolutions and features, the primary of these being Jomres\' unique and exceptionally powerful "Minicomponent" system. This functionality allows us (and you) to replace core functionality without modifying any core files, and indeed to run applications that exist within the Jomres framework (for example, the Auction House plugin).</p>
		<p>In addition to this, Jomres offers more unique features such as it\'s powerful "REST API", which allows you to open up your Jomres system to the outside world, supplying functionality and features to mobile apps and remote web services.</p>
		<p>We are very proud of Jomres, and hope that you enjoy working on it as much as we continue to enjoy working with our users. If you have a support license, you can get support for the system through our ticket system at <a href="https://tickets.jomres.net" target="_blank">tickets.jomres.net</a>.
		</div></div>
		';
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}