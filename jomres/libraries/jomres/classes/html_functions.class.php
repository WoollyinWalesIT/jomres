<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################



class html_functions
	{
	function html_functions()
		{
		}
		
	function cpanelButton( $link, $image, $text, $path='/jomres/images/jomresimages/small/' ,$category = null,$external = false) 
		{
		if (!isset($category))
			$category = 'misc';
		$control_panel_buttons = get_showtime('control_panel_buttons');
		
		if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.$image) )
			{
			if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'jomresimages'.JRDS.'small'.JRDS.$image) )
				$path=get_showtime('eLiveSite').$image;
			else
				$path=get_showtime('live_site').$path.$image;
			}
		else
			$path=get_showtime('live_site').'/jomres/images/'.$image;
		
		$control_panel_buttons[] = array("link"=>$link,"image"=>$image,"menu_name"=>$text,"image_path"=>$path,"category"=>$category,"external"=>$external);
		set_showtime('control_panel_buttons',$control_panel_buttons);
		}
		
	function cpanelInfoRow( $text, $info ) 
		{
		return '
			<span>'.$text.' : '.$info.'</span>
		';
		}
	}

?>