<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################



class html_functions
	{
	function cpanelButton( $link, $image, $text, $path='/jomres/images/jomresimages/large/' ) 
		{
		global $jomresConfig_live_site,$task;
		global $ePointFilepath,$eLiveSite;
		$link = str_replace("&amp;", "&", $link);
		$link = str_replace("&", "&amp;", $link);
		
		if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.$image) )
			{
			if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'jomresimages'.JRDS.'large'.JRDS.$image) )
				$path=$eLiveSite.$image;
			else
				$path=$jomresConfig_live_site.$path.$image;
			}
		else
			$path=$jomresConfig_live_site.'/jomres/images/'.$image;
		if (strlen( jomresGetParam( $_REQUEST, 'task', "" ))>0)
			{
			return '
			<div style="text-align:center;vertical-align:middle;float:left;width:80px;height:65px;">
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