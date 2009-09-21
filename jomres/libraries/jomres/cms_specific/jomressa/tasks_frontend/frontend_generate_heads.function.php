<?php
// ################################################################
defined( "_JOMRES_INITCHECK" ) or die( "Direct Access is not allowed." );
// ################################################################
function frontend_generate_heads()
	{
	$jomresConfig_live_site = get_showtime('live_site');
	$jomresSitefactory	=	jomressa_getSingleton('jomressa_site_factory');
	$jomresConfig		=	jomressa_getSingleton('jomressa_config');
	
	$filename = "styles.css";
	if ($jomresSitefactory->currpage =="admin" )
		$filename = "adminstyles.css";

	$path = $jomresConfig_live_site."/jomres/libraries/jomres/cms_specific/jomressa/templates/";
	$type = "css";$content=array('filename'=>$filename,'path'=>$path);
	$jomresSitefactory->setHead($type,$content);

	$description = "Jomres standalone data";
	$type = "description";$content=array('description'=>$description);
	$jomresSitefactory->setHead($type,$content);
	
	$charset = "UTF-8";
	$type = "charset";$content=array('charset'=>$charset);
	$jomresSitefactory->setHead($type,$content);

	$title = get_showtime('sitename');
	$type = "title";$content=array('title'=>$title);
	$jomresSitefactory->setHead($type,$content);

	$keywords = "keyword keyword keyword";
	$type = "keywords";$content=array('keywords'=>$keywords);
	$jomresSitefactory->setHead($type,$content);

	$revisit = "10";
	$type = "revisit";$content=array('revisit'=>$revisit);
	$jomresSitefactory->setHead($type,$content);

	$distribution = "Global";
	$type = "distribution";$content=array('distribution'=>$distribution);
	$jomresSitefactory->setHead($type,$content);
	}
?>