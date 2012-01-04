<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000about_jomres
	{
	function j16000about_jomres()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		echo '
		<h2>About Jomres</h2>
		<div class="ui-widget-content ui-corner-all" style="width:100%;">
		<div style="margin-left:5px;margin-right:5px;">
		<p><a href="http://www.jomres.net" target="_blank">Jomres</a> is (probably) Joomla\'s favourite booking system.</p>
		<p>Developed and maintained by Vince Wooll and <a href="http://www.jomres-extras.com/" target="_blank">Aladar Barthi</a>, it was initially concieved in early 2005 as a Mambo based solution to a client\'s hotel management needs. While it wasn\'t originally expected to be an online booking system it quickly morphed into one as users requested more and more features.</p>
		<p>As the number of feature requests grew Vince knew that he would need to dedicate more time to the project and in July 2005 Jomres was formally released as a commercial project. Since then Jomres has become one of Mambo and now Joomla\'s longest running projects, having survived various versions of Mambo, then Joomla 1.0, 1.5, 1.6 and finally 1.7.</p>
		<p>Over the years it has seen many new evolutions and features, the primary of these being Jomres\' unique and exceptionally powerful <a href="http://manual.jomres.net/developers_guide_minicomps.html" target="_blank">"Minicomponent"</a> system. This functionality allows us (and you) to replace core functionality without modifying any core files, and indeed to run applications that exist within the Jomres framework (for example, the Auction House plugin).</p>
		<p>In addition to this, Jomres offers more unique features such as it\'s powerful "editing mode", which gives us the opportunity to create unique strings for each property on the system, and different language files for different property types. You will not find these features in any other Joomla based booking system.</p>
		<p>We are very proud of Jomres, and hope that you enjoy working on it as much as we continue to enjoy working with our users. If you have a support license, you can get support for the system through our ticket system at <a href="http://tickets.jomres.net" target="_blank">tickets.jomres.net</a>, or if you\'d like to just chat, please say "Hi" <a href="http://www.jomres.net/index.php?option=com_kunena&view=listcat&Itemid=291" target="_blank">in the forums</a>.
		</div></div>
		';
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}