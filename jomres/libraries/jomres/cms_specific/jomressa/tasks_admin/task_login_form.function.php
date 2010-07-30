<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( "_JOMRES_INITCHECK" ) or die( "Direct Access is not allowed." );
// ################################################################
function task_login_form()
	{
	$JSAuser 		= 	jomressa_getSingleton('jomressa_access_user');
	
	$output=array();
	$pageoutput=array();
	
	// $JSAuser->language = "de"; // use this selector to get messages in other languages
	if (isset($_GET['activate']) && isset($_GET['ident'])) { // this two variables are required for activating/updating the account/password
		$JSAuser->auto_activation = true; // use this (true/false) to stop the automatic activation
		$JSAuser->activate_account($_GET['activate'], $_GET['ident']); // the activation method 
		}
	if (isset($_GET['validate']) && isset($_GET['id'])) { // this two variables are required for activating/updating the new e-mail address
		$JSAuser->validate_email($_GET['validate'], $_GET['id']); // the validation method 
		}
	if (isset($_POST['Submit'])) {
		$JSAuser->save_login = (isset($_POST['remember'])) ? $_POST['remember'] : "no"; // use a cookie to remember the login
		$JSAuser->count_visit = false; // if this is true then the last visitdate is saved in the database (field extra info)
		$JSAuser->login_user($_POST['login'], $_POST['password']); // call the login method
		}
	$error = $JSAuser->the_msg;

	$output['_JOMRES_SA_LOG_IN'] = _JOMRES_SA_LOG_IN;
	$output['_JOMRES_SA_FORMS_ENTERLOGINDETAILS'] = _JOMRES_SA_FORMS_ENTERLOGINDETAILS;
	$output['_JOMRES_SA_FORMS_USERNAME'] = _JOMRES_SA_FORMS_USERNAME;
	$output['_JOMRES_SA_FORMS_PASSWORD'] = _JOMRES_SA_FORMS_PASSWORD;
	$output['_JOMRES_SA_FORMS_AUTOLOGIN'] = _JOMRES_SA_FORMS_AUTOLOGIN;
	$output['_JOMRES_SA_FORMS_NOTREGISTEREDYET'] = _JOMRES_SA_FORMS_NOTREGISTEREDYET;
	$output['_JOMRES_SA_FORMS_CLICKHERE'] = _JOMRES_SA_FORMS_CLICKHERE;
	$output['_JOMRES_SA_FORMS_FORGOTPASSWORD'] = _JOMRES_SA_FORMS_FORGOTPASSWORD;
	
	$output['LOGIN'] =  (isset($_POST['login'])) ? $_POST['login'] : $my_access->user;
	$output['PASSWORD'] = '';
	if (isset($_POST['password'])) $output['PASSWORD'] =$_POST['password'];
	
	$output['CHECKED'] = ($my_access->is_cookie == true) ? " checked" : "";;
	$output['ERROR'] =(isset($error)) ? $error : "&nbsp;";
	$output['JOMRES_SITEPAGE_URL'] =JOMRES_SITEPAGE_URL;
	
	$output['POSTACTION'] = JOMRES_SITEPAGE_URL_ADMIN."&jsat=login";
	
	$pageoutput[]=$output;
	$template_rows = array('pageoutput'=>$pageoutput);
	return render_template("login.html",TEMPLATES_ADMIN,$template_rows);
	}
?>