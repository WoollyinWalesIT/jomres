<?php
// ################################################################
defined( "_JOMRES_INITCHECK" ) or die( "Direct Access is not allowed." );
// ################################################################
function frontend_menus_render()
	{
	$JSAuser 		= 	jomressa_getSingleton('jomressa_access_user');

	$options=array();
	if ($JSAuser->id == NULL)
		{
		
		if (!get_showtime('registration_forbidden'))
			{
			$options[]=array("link"=>JOMRES_SITEPAGE_URL."&jsat=login_form","text"=>_JOMRES_SA_LOG_IN,"seperator"=>" - ");
			$options[]=array("link"=>JOMRES_SITEPAGE_URL."&jsat=register_form","text"=>_JOMRES_SA_FORMS_REGISTER);
			}
		else
			{
			$options[]=array("link"=>JOMRES_SITEPAGE_URL."&jsat=login_form","text"=>_JOMRES_SA_LOG_IN,"seperator"=>"");
			}
		}
	else
		{
		global $jrConfig;
		$options=array();
		$options[]=array("link"=>JOMRES_SITEPAGE_URL."","text"=>get_showtime('sitename'),"seperator"=>" - ");
		$options[]=array("link"=>JOMRES_SITEPAGE_URL."&jsat=update_user","text"=>_JOMRES_SA_UPDATE_ACCOUNT,"seperator"=>" - ");
		$options[]=array("link"=>JOMRES_SITEPAGE_URL."&jsat=log_out","text"=>_JOMRES_SA_LOG_OUT);
		}
	
	$template_rows = array('pageoutput'=>$pageoutput,'menurows'=>$options);
	return render_template("menus.html",TEMPLATES_FRONTEND,$template_rows);
	}
?>