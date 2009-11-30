<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

// ################################################################
defined( "_JOMRES_INITCHECK" ) or die( "Direct Access is not allowed." );
// ################################################################
class jomressa_access_user
	{
	// Store the single instance of Database
	private static $userInstance;

	var $user;
	var $user_pw;
	var $user_full_name;
	var $user_info;
	var $user_email;
	var $save_login = "yes";
	var $cookie_name = COOKIE_NAME;
	var $cookie_path = COOKIE_PATH; 
	var $is_cookie;
	
	var $count_visit;
	
	var $id;
	var $language = "en"; // change this property to use messages in another language 
	var $the_msg;
	var $auto_activation; // use this variable in your login script
	var $send_copy = true; // send a mail copy (after activation) to the administrator 

	public function __construct($redirect = true) 
		{
		
		$jomresConfig 	= 	jomressa_getSingleton('jomressa_config');
		$jomresSitefactory	= 	jomressa_getSingleton('jomressa_site_factory');
		$this->main_page="index.php";
		if ($jomresSitefactory->currpage == "admin")
			$this->main_page="index.php?admin";
		$this->logout_page="index.php";
		//if ($jomresSitefactory->currpage == "admin")
		//	$this->logout_page="admin.php";
			
		$this->table_name =get_showtime('dbprefix')."users";
		$this->connect_db();
		if (empty($_SESSION['logged_in'])) 
			{
			$this->login_reader();
			if ($this->is_cookie) 
				{
				$this->set_user($redirect);
				}
			}
		if (isset($_SESSION['user'], $_SESSION['pw'])) 
			{
			$this->user = $_SESSION['user'];
			$this->user_pw = $_SESSION['pw'];
			$this->get_user_info();
			}
		
		}

	public static function getInstance()
		{
		if (!self::$userInstance)
			{
			self::$userInstance = new jomressa_access_user();
			}
		return self::$userInstance;
		}
		
	public function __clone()
		{
		trigger_error('Cloning not allowed on a singleton object', E_USER_ERROR);
		}
		
	// removed check for encoded var $this->user_pw
	// replaced in default case var $password with $this->user_pw
	// added MD5 to sql statement for "new_pass"
	function check_user($pass = "") {
		switch ($pass) {
			case "new": 
			$sql = sprintf("SELECT COUNT(*) AS test FROM %s WHERE email = %s OR login = %s", $this->table_name, $this->ins_string($this->user_email), $this->ins_string($this->user));
			break;
			case "lost":
			$sql = sprintf("SELECT COUNT(*) AS test FROM %s WHERE email = %s AND active = 'y'", $this->table_name, $this->ins_string($this->user_email));
			break;
			// new login name based check before new password activation
			case "new_pass":
			$sql = sprintf("SELECT COUNT(*) AS test FROM %s WHERE MD5(CONCAT(login, %s)) = %s", $this->table_name, $this->ins_string(SECRET_STRING), $this->ins_string($this->check_user));
			break;
			case "active":
			$sql = sprintf("SELECT COUNT(*) AS test FROM %s WHERE id = %d AND active = 'n'", $this->table_name, $this->id);
			break;
			case "validate":
			$sql = sprintf("SELECT COUNT(*) AS test FROM %s WHERE id = %d AND tmp_mail <> ''", $this->table_name, $this->id);
			break;
			default:
			$sql = sprintf("SELECT COUNT(*) AS test FROM %s WHERE BINARY login = %s AND pw = %s AND active = 'y'", $this->table_name, $this->ins_string($this->user), $this->ins_string($this->user_pw));
		}
		
		$result = mysql_query($sql) or die(mysql_error());
		//echo $sql."<br>";exit;
		if (mysql_result($result, 0, "test") == 1) {
			{
			return true;
			}
		} else {
			return false;
		}
	}
	// New methods to handle the access level
	function get_access_level() {
		$sql = sprintf("SELECT access_level FROM %s WHERE login = %s AND active = 'y'", $this->table_name, $this->ins_string($this->user));
		if (!$result = mysql_query($sql)) {
		   $this->the_msg = $this->messages(14);
		} else {
			return mysql_result($result, 0, "access_level");
		}
	}
	function set_user($goto_page) {
		$_SESSION['user'] = $this->user;
		$_SESSION['pw'] = $this->user_pw;
		$_SESSION['logged_in'] =  time(); // to offer a time limited access (later)
		if (!empty($_SESSION['referer'])) {
			$next_page = $_SESSION['referer'];
			unset($_SESSION['referer']);
		} else {
			$next_page = $this->main_page;
		}
		if ($goto_page) {
			header("Location: ".$next_page);
			exit;
		}
	}
	function connect_db() {
		$jomresConfig = jomressa_getSingleton('jomressa_config');
		
		$conn_str = mysql_connect(get_showtime('host'),get_showtime('user'), get_showtime('password'));
		mysql_select_db(get_showtime('db')) or die("Error, couldn't connect to db"); // if there are problems with the tablenames inside the config file use this row 
	}
	// added md5 to var $password
	// changed argument for req_visit to $this->user_pw
	function login_user($user, $password) {
		if ($user != "" && $password != "") {
			$this->user = $user;
			$this->user_pw = md5($password);
			if ($this->check_user()) {
				$this->login_saver();
				if ($this->count_visit) {
					$this->reg_visit($user, $this->user_pw);
				}
				$this->set_user(true);
			} else {
				$this->the_msg = $this->messages(10);
			}
		} else {
			$this->the_msg = $this->messages(11);
		}
	}
	function login_saver() {
		if ($this->save_login == "no") {
			if (isset($_COOKIE[$this->cookie_name])) {
				$expire = time()-3600;
			} else {
				return;
			}
		} else {
			$expire = time()+2592000;
		}	
		$cookie_str = $this->user.chr(31).base64_encode($this->user_pw);
		setcookie($this->cookie_name, $cookie_str, $expire, $this->cookie_path);
	}
	function login_reader() {
		if (isset($_COOKIE[$this->cookie_name])) {
			$cookie_parts = explode(chr(31), $_COOKIE[$this->cookie_name]);
			$this->user = $cookie_parts[0];
			$this->user_pw = base64_decode($cookie_parts[1]);
			if ($this->check_user()) {
				$this->is_cookie = true;
			} else {
				unset($this->user);
				unset($this->user_pw);
			}
		}			 
	}
	// removed the md5 from var $pass
	function reg_visit($login, $pass) {
		$visit_sql = sprintf("UPDATE %s SET extra_info = '%s' WHERE login = %s AND pw = %s", $this->table_name, date("Y-m-d H:i:s"), $this->ins_string($login), $this->ins_string($pass));
		mysql_query($visit_sql);
	}
	function log_out() {
		unset($_SESSION['user']);
		unset($_SESSION['pw']);
		unset($_SESSION['logged_in']);
		session_destroy();
		header("Location: ".$this->logout_page);
		exit;
	}
	function access_page($refer = "", $qs = "", $level = DEFAULT_ACCESS_LEVEL) {
		$refer_qs = $refer;
		$refer_qs .= ($qs != "") ? "?".$qs : "";
		if (!$this->check_user()) {
			$_SESSION['referer'] = $refer_qs;
			header("Location: ".$this->login_page);
			exit;
		}
		if ($this->get_access_level() < $level) {
		
			header("Location: ".$this->deny_access_page);
			exit;
		}
	}
	function get_user_info() {
		$sql_info = sprintf("SELECT real_name, extra_info, email, id FROM %s WHERE login = %s AND pw = %s", $this->table_name, $this->ins_string($this->user), $this->ins_string($this->user_pw));
		$res_info = mysql_query($sql_info);
		$this->id = mysql_result($res_info, 0, "id");
		$this->user_full_name = mysql_result($res_info, 0, "real_name");
		$this->user_info = mysql_result($res_info, 0, "extra_info");
		$this->user_email = mysql_result($res_info, 0, "email");
	}
	function update_user($new_password, $new_confirm, $new_name, $new_info, $new_mail) {
		if ($new_confirm != "") {
			if ($this->check_new_password($new_password, $new_confirm)) {
				$ins_password = md5($new_password);
				$update_pw = true;
			} else {
				return;
			}
		} else {
			$ins_password = $this->user_pw;
			$update_pw = false;
		}
		if (trim($new_mail) <> $this->user_email) {
			if  ($this->check_email($new_mail)) {
				$this->user_email = $new_mail;
				if (!$this->check_user("lost")) {
					$update_email = true;
				} else {
					$this->the_msg = $this->messages(31);
					return;
				}
			} else {
				$this->the_msg = $this->messages(16);
				return;
			}
		} else {
			$update_email = false;
			$new_mail = "";
		}
		$upd_sql = sprintf("UPDATE %s SET pw = %s, real_name = %s, extra_info = %s, tmp_mail = %s WHERE id = %d", 
			$this->table_name,
			$this->ins_string($ins_password),
			$this->ins_string($new_name),
			$this->ins_string($new_info),
			$this->ins_string($new_mail),
			$this->id);
		$upd_res = mysql_query($upd_sql);
		if ($upd_res) {
			if ($update_pw) {
				$_SESSION['pw'] = $this->user_pw = $ins_password;
				if (isset($_COOKIE[$this->cookie_name])) {
					$this->save_login = "yes";
					$this->login_saver();
				}
			}
			$this->the_msg = $this->messages(30);
			if ($update_email) {
				if ($this->send_mail($new_mail, 33)) {
					$this->the_msg = $this->messages(27);
				} else {
					$query = sprintf("UPDATE %s SET tmp_mail = ''", $this->table_name);
					mysql_query($query);
					$this->the_msg = $this->messages(14);
				} 
			}
		} else {
			$this->the_msg = $this->messages(15);
		}
	}
	function check_new_password($pass, $pw_conform) {
		if ($pass == $pw_conform) {
			if (strlen($pass) >= PW_LENGTH) {
				return true;
			} else {
				$this->the_msg = $this->messages(32);
				return false;
			}
		} else {
			$this->the_msg = $this->messages(38);
			return false;
		}	
	}
	function check_email($mail_address) {
		if (preg_match("/^[0-9a-z]+(([\.\-_])[0-9a-z]+)*@[0-9a-z]+(([\.\-])[0-9a-z-]+)*\.[a-z]{2,4}$/i", $mail_address)) {
			return true;
		} else {
			return false;
		}
	}
	function ins_string($value) {
		if (preg_match("/^(.*)(##)(int|date|eu_date)$/", $value, $parts)) {
			$value = $parts[1];
			$type = $parts[3];
		} else {
			$type = "";
		}
		$value = (!get_magic_quotes_gpc()) ? addslashes($value) : $value;
		switch ($type) {
			case "int":
			$value = ($value != "") ? intval($value) : NULL;
			break;
			case "eu_date":
			$date_parts = preg_split ("/[\-\/\.]/", $value); 
			$time = mktime(0, 0, 0, $date_parts[1], $date_parts[0], $date_parts[2]);
			$value = strftime("'%Y-%m-%d'", $time);
			break;
			case "date":
			$value = "'".preg_replace("/[\-\/\.]/", "-", $value)."'";
			break;
			default:
			$value = ($value != "") ? "'" . $value . "'" : "''";
		}
		return $value;
	}
	function register_user($first_login, $first_password, $confirm_password, $first_name, $first_info, $first_email) {
		if ($this->check_new_password($first_password, $confirm_password)) {
			if (strlen($first_login) >= LOGIN_LENGTH) {
				if ($this->check_email($first_email)) {
					$this->user_email = $first_email;
					$this->user = $first_login;
					if ($this->check_user("new")) {
						$this->the_msg = $this->messages(12);
						return;
					} else {
						$sql = sprintf("INSERT INTO %s (id, login, pw, real_name, extra_info, email, access_level, active) VALUES (NULL, %s, %s, %s, %s, %s, %d, 'n')", 
							$this->table_name,
							$this->ins_string($first_login),
							$this->ins_string(md5($first_password)),
							$this->ins_string($first_name),
							$this->ins_string($first_info),
							$this->ins_string($this->user_email),
							DEFAULT_ACCESS_LEVEL);
						$ins_res = mysql_query($sql) or die(mysql_error());
						if ($ins_res) {
							$this->id = mysql_insert_id();
							$this->user_pw = md5($first_password);
							if ($this->send_mail($this->user_email, 29, 28)) {
								$this->the_msg = $this->messages(13);
							} else {
								mysql_query(sprintf("DELETE FROM %s WHERE id = %d", $this->table_name, $this->id));
								$this->the_msg = $this->messages(14);
							}
						} else {
							$this->the_msg = $this->messages(15);
						}
					}
				} else {
					$this->the_msg = $this->messages(16);
				}
			} else {
				$this->the_msg = $this->messages(17);
			}
		}
	}
	function validate_email($validation_key, $key_id) {
		if ($validation_key != "" && strlen($validation_key) == 32 && $key_id > 0) {
			$this->id = $key_id;
			if ($this->check_user("validate")) {
				$upd_sql = sprintf("UPDATE %s SET email = tmp_mail, tmp_mail = '' WHERE id = %d AND MD5(pw) = %s", $this->table_name, $key_id, $this->ins_string($validation_key));
				if (mysql_query($upd_sql)) {
					$this->the_msg = $this->messages(18);
				} else {
					$this->the_msg = $this->messages(19);
				}
			} else {
				$this->the_msg = $this->messages(34);
			}
		} else {
			$this->the_msg = $this->messages(21);
		}
	}

	function activate_account($activate_key, $key_id) {
		if ($activate_key != "" && strlen($activate_key) == 32 && $key_id > 0) {
			$this->id = $key_id;
			if ($this->check_user("active")) {
				if ($this->auto_activation) {
					$upd_sql = sprintf("UPDATE %s SET active = 'y' WHERE id = %d AND MD5(pw) = %s AND active = 'n'", $this->table_name, $key_id, $this->ins_string($activate_key));
					if (mysql_query($upd_sql)) {
						if ($this->send_confirmation($key_id)) {
							$this->the_msg = $this->messages(18);
						} else {
							$this->the_msg = $this->messages(14);
						}
					} else {
						$this->the_msg = $this->messages(19);
					}
				} else {
					if ($this->send_mail($this->admin_mail, 40, 39)) {
						$this->the_msg = $this->messages(36);
					} else {
						$this->the_msg = $this->messages(14);
					}
				}
			} else {
				$this->the_msg = $this->messages(20);
			}
		} else {
			$this->the_msg = $this->messages(21);
		}
	}
	function forgot_password($forgot_email) { 
		if ($this->check_email($forgot_email)) {
			$this->user_email = $forgot_email;
			if (!$this->check_user("lost")) {
				$this->the_msg = $this->messages(22);
			} else {
				// changed from pw to login for verification string
				$forgot_sql = sprintf("SELECT login FROM %s WHERE email = %s", $this->table_name, $this->ins_string($this->user_email));
				if ($forgot_result = mysql_query($forgot_sql)) {
					$this->user = mysql_result($forgot_result, 0, "login");
					if ($this->send_mail($this->user_email, 35, 26)) {
						$this->the_msg = $this->messages(23);
					} else {
						$this->the_msg = $this->messages(14);
					}
				} else {
					$this->the_msg = $this->messages(15);
				}
			}
		} else {
			$this->the_msg = $this->messages(16);
		}
	}
	function check_activation_password($controle_str) {
		if ($controle_str != "" && strlen($controle_str) == 32) {
			$this->check_user = $controle_str;
			if ($this->check_user("new_pass")) {
				$sql_get_user = sprintf("SELECT login FROM %s WHERE MD5(CONCAT(login, %s)) = %s", $this->table_name, $this->ins_string(SECRET_STRING), $this->ins_string($this->check_user));
				$get_user = mysql_query($sql_get_user);
				$this->user = mysql_result($get_user, 0, "login"); // end fix
				return true;
			} else {
				$this->the_msg = $this->messages(21);
				return false;
			}
		} else {
			$this->the_msg = $this->messages(21);
			return false;
		}
	}
	function activate_new_password($new_pass, $new_confirm, $verif_str) {
		if ($this->check_new_password($new_pass, $new_confirm)) {
			// new password is set based on user name now
			$sql_new_pass = sprintf("UPDATE %s SET pw = '%s' WHERE MD5(CONCAT(login, %s)) = %s", $this->table_name, md5($new_pass), $this->ins_string(SECRET_STRING), $this->ins_string($verif_str));
			if (mysql_query($sql_new_pass)) {
				$this->the_msg = $this->messages(30);
				return true;
			} else {
				$this->the_msg = $this->messages(14);
				return false;
			}
		} else {
			return false;
		}
	}
	function send_confirmation($id) {
		$sql = sprintf("SELECT real_name, email FROM %s WHERE id = %d", $this->table_name, $id);
		$res = mysql_query($sql);
		$user_email = mysql_result($res, 0, "email");
		$this->user_full_name = mysql_result($res, 0, "real_name");
		if ($this->user_full_name == "") $this->user_full_name = "User"; // change "User" to whatever you want, it's just a default name
		if ($this->send_mail($user_email, 37, 24, $this->send_copy)) {
			return true;
		} else {
			return false;
		}
	}

	function send_mail($mail_address, $msg = 29, $subj = 28, $send_admin = false) 
		{
		$subject = $this->messages($subj);
		$body = $this->messages($msg);
		$result = jomressa_sendmail(get_showtime('frommail'),get_showtime('fromname'),$mail_address,$subject,$body);
		if ($send_admin)
			jomressa_sendmail(get_showtime('frommail'),get_showtime('fromname'),get_showtime('mailfrom'),"COPY OF ".$subject,$body);
		return $result;
		}
	

	function messages($num) {
		$jomresConfig 	= 	jomressa_getSingleton('jomressa_config');
		$result = require_once(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'language'.JRDS.'email_messages'.JRDS.get_showtime('lang').".php");
			$msg[10] = _JOMRES_SA_LOGINFAILED;
			$msg[11] = _JOMRES_SA_EMPTY;
			$msg[12] = _JOMRES_SA_ALREADYEXISTS;
			$msg[13] = _JOMRES_SA_CHECKEMAIL;
			$msg[14] = _JOMRES_SA_ERROR_OCCURRED;
			$msg[15] = _JOMRES_SA_ERROR_OCCURRED_TRYLATER;
			$msg[16] = _JOMRES_SA_ADDRESSNOTVALID;
			$msg[17] = _JOMRES_SA_FIELDREQUIRED;
			$msg[18] = _JOMRES_SA_PROCESSED;
			$msg[19] = _JOMRES_SA_CANNOTACTIVATE;
			$msg[20] = _JOMRES_SA_NOACCOUNTTOACTIVATE;
			$msg[21] = _JOMRES_SA_KEYNOTVALID;
			$msg[22] = _JOMRES_SA_NOACTIVEACCOUNT;
			$msg[23] = _JOMRES_SA_CHECKEMAILFORNEWPASSWORD;
			$msg[24] = _JOMRES_SA_ACCOUNTACTIVATED;
			$msg[25] = _JOMRES_SA_CANNOTACTIVATEPASSWORD;
			$msg[26] = _JOMRES_SA_YOURFORGOTTENPASSWORD; 
			$msg[27] = _JOMRES_SA_CHECKEMAILTOACTIVATEMODS;
			$msg[28] = _JOMRES_SA_REQUESTMUSTBEPROCESSED;
			$msg[29] = _JOMRES_SA_ACTIVATIONEEMAILINFO;
			$msg[30] = _JOMRES_SA_ACCOUNTMODIFIED;
			$msg[31] = _JOMRES_SA_EMAILALREADYUSED;
			$msg[32] = _JOMRES_SA_PASSWORDFIELDREQUIRED;
			$msg[33] = _JOMRES_SA_VALIDATIONEMAIL_NEWEMAIL;
			$msg[34] = _JOMRES_SA_NOEMAILADDRESSFORVALIDATION;
			$msg[35] = _JOMRES_SA_NEWPASSWORDNEXT;
			$msg[36] = _JOMRES_SA_REQUESTPROCESSEDPENDING;
			$msg[37] = _JOMRES_SA_LOGINNOWPOSSIBLE;
			$msg[38] = _JOMRES_SA_CONFIRMATIONPASSWORDNOTMATCHED;
			$msg[39] = _JOMRES_SA_ANEWUSER;
			$msg[40] = _JOMRES_SA_ANEWUSER_EMAILCONTENT;
			$msg[41] = _JOMRES_SA_VALIDATEEMAILSUBJECT; // subject in e-mail
			$msg[42] = _JOMRES_SA_YOURADDRESSMODIFED;
		return $msg[$num];
		}
	}
?>