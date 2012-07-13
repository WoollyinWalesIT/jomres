<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( "_JOMRES_INITCHECK" ) or die( "" );
// ################################################################

function task_activate()
	{
	$JSAuser 		= 	jomressa_getSingleton('jomressa_access_user');
	
	$output=array();
	$pageoutput=array();

	if (isset($_GET['activate']) || isset($_SESSION['activation']) ) 
		{
		if ( isset( $_SESSION['activation']) )
			$_GET['activate'] = $_SESSION['activation'] ;

		if ($JSAuser->check_activation_password($_GET['activate'])) 
			{ // the activation/validation method 
			if ( isset( $_GET['activate']) )
				$_SESSION['activation'] = $_GET['activate']; // put the activation string into a session or into a hdden field

			if (isset($_POST['Submit'])) 
				{
				
				if ($JSAuser->activate_new_password($_POST['password'], $_POST['confirm'], $_SESSION['activation'])) // this will change the password
					{ 
					unset($_SESSION['activation']);
					jomresRedirect(JOMRES_SITEPAGE_URL."&jsat=login_form");
					exit;
					}
				$JSAuser->user = $_POST['user'];
				}

			$output['USERNAME'] = $JSAuser->user;
			$output['POSTACTION'] = JOMRES_SITEPAGE_URL."&jsat=activate";
			$output['_JOMRES_SA_FORMS_FORGOT_TITLE'] = _JOMRES_SA_FORMS_FORGOT_TITLE;
			$output['_JOMRES_SA_FORMS_ENTERNEWPASSWORD'] = _JOMRES_SA_FORMS_ENTERNEWPASSWORD;
			$output['_JOMRES_SA_FORMS_UPDATEUSER_CONFIRMPASSWORD'] = _JOMRES_SA_FORMS_UPDATEUSER_CONFIRMPASSWORD;

			$output['_JOMRES_SA_SUBMIT']=_JOMRES_SA_SUBMIT;

			$output['ERROR'] =(isset($error)) ? $error : "&nbsp;";
			$output['JOMRES_SITEPAGE_URL'] =JOMRES_SITEPAGE_URL;

			$pageoutput[]=$output;
			$template_rows = array('pageoutput'=>$pageoutput);
			return render_template("activate_password.html",TEMPLATES_FRONTEND,$template_rows);
			}
		else $error = _JOMRES_SA_FORMS_FORGOT_NOACTIVATIONKEY;
		}
	}
?>