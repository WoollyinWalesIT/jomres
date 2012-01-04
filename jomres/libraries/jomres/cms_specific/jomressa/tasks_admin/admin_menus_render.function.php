<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6 
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( "_JOMRES_INITCHECK" ) or die( "" );
// ################################################################
function admin_menus_render()
	{
	$options=array();
	$options[]=array("link"=>JOMRES_SITEPAGE_URL_ADMIN."","text"=>_JOMRES_CONTROLPANEL,"extra"=>"","seperator"=>" - ");
	$options[]=array("link"=>JOMRES_SITEPAGE_URL."","text"=>_JOMRES_SA_PREVIEW,"extra"=>" target='_blank'","seperator"=>" - ");
	$options[]=array("link"=>JOMRES_SITEPAGE_URL_ADMIN."&jsat=update_user","text"=>_JOMRES_SA_UPDATE_ACCOUNT,"seperator"=>" - ");
	$options[]=array("link"=>JOMRES_SITEPAGE_URL_ADMIN."&jsat=log_out","text"=>_JOMRES_SA_LOG_OUT,"seperator"=>" - ");
	$template_rows = array('pageoutput'=>$pageoutput,'menurows'=>$options);
	return render_template("menus.html",TEMPLATES_ADMIN,$template_rows);
	}
?>