<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( "_JOMRES_INITCHECK" ) or die( "" );
// ################################################################
function admin_generate_heads()
	{
	$jomresSitefactory	=	jomressa_getSingleton('jomressa_site_factory');
	$jomresConfig		=	jomressa_getSingleton('jomressa_config');

	$filename = "admin-styles.css";
	$path = TEMPLATES_CSS_REL_PATH;
	$type = "css";$content=array('filename'=>$filename,'path'=>$path);
	$jomresSitefactory->setHead($type,$content);

	$description = "Jomres standalone data";
	$type = "description";$content=array('description'=>$description);
	$jomresSitefactory->setHead($type,$content);

	$keywords = "keyword keyword keyword";
	$type = "keywords";$content=array('keywords'=>$keywords);
	$jomresSitefactory->setHead($type,$content);

	$charset = "UTF-8";
	$type = "charset";$content=array('charset'=>$charset);
	$jomresSitefactory->setHead($type,$content);

	$title = $jomresConfig->sitename;
	$type = "title";$content=array('title'=>$title);
	$jomresSitefactory->setHead($type,$content);

	$revisit = "10";
	$type = "revisit";$content=array('revisit'=>$revisit);
	$jomresSitefactory->setHead($type,$content);

	$distribution = "Global";
	$type = "distribution";$content=array('distribution'=>$distribution);
	$jomresSitefactory->setHead($type,$content);
	}
?>