<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################



class html_functions
	{
	function html_functions()
		{
		}
		
	function cpanelButton( $link, $image, $text, $path='/jomres/images/jomresimages/large/' ) 
		{
		$link = str_replace("&amp;", "&", $link);
		$link = str_replace("&", "&amp;", $link);
		
		if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.$image) )
			{
			if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'jomresimages'.JRDS.'large'.JRDS.$image) )
				$path=get_showtime('eLiveSite').$image;
			else
				$path=get_showtime('live_site').$path.$image;
			}
		else
			$path=get_showtime('live_site').'/jomres/images/'.$image;
		if (strlen( jomresGetParam( $_REQUEST, 'task', "" ))>0)
			{
			return '
			<div style="text-align:center;vertical-align:middle;float:left;width:120px;height:80px;">
				<a href="'.$link.'" style="text-decoration:none;border:none;">
					<img src="'.$path.'" style="border:none;" border="0" height="35" width="35" /><br/>
					<span>'.$text.'</span>
				</a>
			</div>
			';
			}
		else
			{
			return '
			<div style="padding:0 2px 4px 0;text-align:center;vertical-align:middle;float:left;width:120px;height:100px;">
				<div class="icon" align="center">
					<a href="'.$link.'" style="text-decoration:none;">
					<img src="'.$path.'" border="0" /><br/>
					<span>'.$text.'</span>
					</a>
				</div>
			</div>
			';
			}
		}
		
	function cpanelInfoRow( $text, $info ) 
		{
		return '
			<span>'.$text.' : '.$info.'</span>
		';
		}
	}

?>