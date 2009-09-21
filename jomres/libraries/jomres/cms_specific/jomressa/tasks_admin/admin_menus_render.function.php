<?php
// ################################################################
defined( "_JOMRES_INITCHECK" ) or die( "Direct Access is not allowed." );
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