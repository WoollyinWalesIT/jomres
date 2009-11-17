<?php
// ################################################################
defined( "_JOMRES_INITCHECK" ) or die( "Direct Access is not allowed." );
// ################################################################
function frontend_menus_render()
	{
	$JSAuser 		= 	jomressa_getSingleton('jomressa_access_user');
	$seperator = " - ";
	$options=array();
	if ($JSAuser->id == NULL)
		{
		$options[]=array("link"=>JOMRES_SITEPAGE_URL."","text"=>get_showtime('sitename'),"seperator"=>$seperator);
		if (!get_showtime('registration_forbidden'))
			{
			$options[]=array("link"=>JOMRES_SITEPAGE_URL."&jsat=login_form","text"=>_JOMRES_SA_LOG_IN,"seperator"=>$seperator);
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
		$options[]=array("link"=>JOMRES_SITEPAGE_URL."","text"=>get_showtime('sitename'),"seperator"=>$seperator);
		$options[]=array("link"=>JOMRES_SITEPAGE_URL."&jsat=update_user","text"=>_JOMRES_SA_UPDATE_ACCOUNT,"seperator"=>$seperator);
		
		if ($JSAuser->user=="administrator")
			{
			$options[]=array("link"=>JOMRES_SITEPAGE_URL."&jsat=log_out","text"=>_JOMRES_SA_LOG_OUT." (".$JSAuser->user.") ","seperator"=>$seperator);
			$options[]=array("link"=>JOMRES_SITEPAGE_URL."&admin","text"=>"<strong>"._JOMRES_SA_PAGE_ADMIN."</strong>");
			}
		else
			$options[]=array("link"=>JOMRES_SITEPAGE_URL."&jsat=log_out","text"=>_JOMRES_SA_LOG_OUT." (".$JSAuser->user.") ");
		
		}
	
	$template_rows = array('pageoutput'=>$pageoutput,'menurows'=>$options);
	return render_template("menus.html",TEMPLATES_FRONTEND,$template_rows);
	}
?>