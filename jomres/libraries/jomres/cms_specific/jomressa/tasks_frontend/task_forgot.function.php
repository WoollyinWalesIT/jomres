<?php
function task_forgot()
	{
	$JSAuser 		= 	jomressa_getSingleton('jomressa_access_user');
	
	$output=array();
	$pageoutput=array();

	if (isset($_POST['Submit'])) 
		{
		$JSAuser->forgot_password($_POST['email']);
		} 
	$error = $JSAuser->the_msg;


	$output['_JOMRES_SA_FORMS_FORGOT_TITLE'] = _JOMRES_SA_FORMS_FORGOT_TITLE;
	$output['_JOMRES_SA_FORMS_FORGOT_DESC'] = _JOMRES_SA_FORMS_FORGOT_DESC;
	$output['_JOMRES_SA_FORMS_UPDATEUSER_EMAIL'] = _JOMRES_SA_FORMS_UPDATEUSER_EMAIL;

	$output['EMAIL']=(isset($_POST['email'])) ? $_POST['email'] : "";

	$output['ERROR'] =(isset($error)) ? $error : "&nbsp;";
	$output['JOMRES_SITEPAGE_URL'] =JOMRES_SITEPAGE_URL;
	
	$output['POSTACTION'] = JOMRES_SITEPAGE_URL."&jsat=forgot";
	
	$pageoutput[]=$output;
	$template_rows = array('pageoutput'=>$pageoutput);
	return render_template("forgot.html",TEMPLATES_FRONTEND,$template_rows);
	}
?>