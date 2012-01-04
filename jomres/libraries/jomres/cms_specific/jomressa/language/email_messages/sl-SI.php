<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5 
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################

// These definitions are in a file of their own as we need the file to be called when the email's generated, not when the system's first run

define('_JOMRES_SA_LOGINFAILED', "Login and/or password did not match to the database.");
define('_JOMRES_SA_EMPTY', "Login and/or password is empty!");
define('_JOMRES_SA_ALREADYEXISTS' , "Sorry, a user with this login and/or e-mail address already exist.");
define('_JOMRES_SA_CHECKEMAIL' , "Please check your e-mail and follow the instructions.");
define('_JOMRES_SA_ERROR_OCCURRED' , "Sorry, an error occurred please try again.");
define('_JOMRES_SA_ERROR_OCCURRED_TRYLATER' , "Sorry, an error occurred please try it again later.");
define('_JOMRES_SA_ADDRESSNOTVALID', "The e-mail address is not valid.");
define('_JOMRES_SA_FIELDREQUIRED' , "The field login (min. ".LOGIN_LENGTH." char.) is required.");
define('_JOMRES_SA_PROCESSED' , "Your request has been processed. Login to continue.");
define('_JOMRES_SA_CANNOTACTIVATE' , "Sorry, cannot activate your account.");
define('_JOMRES_SA_NOACCOUNTTOACTIVATE' , "There is no account to activate.");
define('_JOMRES_SA_KEYNOTVALID' , "Sorry, this activation key is not valid!");
define('_JOMRES_SA_NOACTIVEACCOUNT' , "Sorry, there is no active account which match with this e-mail address.");
define('_JOMRES_SA_CHECKEMAILFORNEWPASSWORD', "Please check your e-mail to get your new password.");
define('_JOMRES_SA_ACCOUNTACTIVATED' , "Your user account has been activated... ");
define('_JOMRES_SA_CANNOTACTIVATEPASSWORD' , "Sorry, cannot activate your password.");
define('_JOMRES_SA_YOURFORGOTTENPASSWORD', "Your forgotten password..."); 
define('_JOMRES_SA_CHECKEMAILTOACTIVATEMODS', "Please check your e-mail and activate your modification(s).");
define('_JOMRES_SA_REQUESTMUSTBEPROCESSED' , "Your registration activation for ".get_showtime('sitename'));
define('_JOMRES_SA_ACTIVATIONEEMAILINFO', "Hello,<br/><br/>to activate your registration click the following link:<br/><a href='".JOMRES_SITEPAGE_URL."&jsat=login_form&ident=".$this->id."&activate=".md5($this->user_pw)."'>
".JOMRES_SITEPAGE_URL."&jsat=login_form&ident=".$this->id."&activate=".md5($this->user_pw)."</a>
<br/>
<br/>kind regards<br/>".get_showtime('fromname'));
define('_JOMRES_SA_ACCOUNTMODIFIED' , "Your account has been modified.");
define('_JOMRES_SA_EMAILALREADYUSED' , "This e-mail address already exist, please use another one.");
define('_JOMRES_SA_PASSWORDFIELDREQUIRED' , "The field password (min. ".PW_LENGTH." char) is required.");
define('_JOMRES_SA_VALIDATIONEMAIL_NEWEMAIL' , "Hello, ".$this->user_full_name.",<br/><br/>the new e-mail address must be validated, click the following link:<br/><a href='".JOMRES_SITEPAGE_URL."&jsat=login_form&id=".$this->id."&validate=".md5($this->user_pw)."'>".JOMRES_SITEPAGE_URL."?jsat=login_form&id=".$this->id."&validate=".md5($this->user_pw)."</a>, <br/><br/>kind regards<br/>".get_showtime('fromname'));
define('_JOMRES_SA_NOEMAILADDRESSFORVALIDATION' , "There is no e-mail address for validation.");
define('_JOMRES_SA_NEWPASSWORDNEXT' , "Hello, ".$this->user_full_name.",<br/><br/>Enter your new password next, please click the following link to enter the form:<br/>".JOMRES_SITEPAGE_URL.$this->password_page."&jsat=activate&activate=".md5($this->user.SECRET_STRING)."<br/><br/>kind regards<br/>".get_showtime('fromname'));
define('_JOMRES_SA_REQUESTPROCESSEDPENDING' , "Your request is processed and is pending for validation by the admin. <br/>You will get an e-mail if it's done.");
define('_JOMRES_SA_LOGINNOWPOSSIBLE' , "Hello ".$this->user_full_name.",<br/>Your account is active and it's possible to login now.<br/><br/>Click on this link to access the login page:<br/><a href='".JOMRES_SITEPAGE_URL."&jsat=login_form'>".JOMRES_SITEPAGE_URL."&jsat=login_form</a><br/><br/>kind regards<br/>".get_showtime('fromname'));
define('_JOMRES_SA_CONFIRMATIONPASSWORDNOTMATCHED' , "The confirmation password does not match the password. Please try again.");
define('_JOMRES_SA_ANEWUSER' , "A new user...");
define('_JOMRES_SA_ANEWUSER_EMAILCONTENT' , "There was a new user registration on ".date("Y-m-d").":<br/><br/>Click here to enter the admin page:<br/><br/>".$host.$this->admin_page."&login_id=".$this->id);
define('_JOMRES_SA_VALIDATEEMAILSUBJECT' , "Validate your e-mail address..."); // subject in e-mail
define('_JOMRES_SA_YOURADDRESSMODIFED' , "Your e-mail address is modified.");

