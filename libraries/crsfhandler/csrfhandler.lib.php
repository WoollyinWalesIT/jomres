<?php
	
	/*
	
	Name	: Simple CSRF protection class for Core-PHP (Non-Framework).
	By	: Banujan Balendrakumar | https://www.facebook.com/balendrakumar.banujan
	License	: Free & Open
	
	*/
	
	class csrf{
		
		private static function startSession(){
			
			if(!isset($_SESSION)){
				session_start();
			}
		}
		
		public static function setToken(){
			
			csrf::startSession();
			
			if (function_exists('openssl_random_pseudo_bytes')) {
				$key = bin2hex(openssl_random_pseudo_bytes(32));
			} else {
				$key = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
			}
			
			if(empty($_SESSION["jomres_csrfTokenlist"]) || !isset($_SESSION["jomres_csrfTokenlist"])){
				$_SESSION["jomres_csrfTokenlist"] = $key; 
			}else{
				$_SESSION["jomres_csrfTokenlist"] = $_SESSION["jomres_csrfTokenlist"].",".$key;
			}

			unset($keyset);
			return $key;
		}

		public static function checkToken($key){
			
			csrf::startSession();
			
			$sessionSet = explode(",",$_SESSION["jomres_csrfTokenlist"]);
			$keys = null;
			$isMatch = false;
			
			foreach($sessionSet as $sessionkey){
				if($key == $sessionkey){
					$isMatch = true;
				}else{
					if($keys == null){
						$keys = $sessionkey;
					}else{
						$keys .= ",".$sessionkey;
					}
				}
			}
			
			$_SESSION["jomres_csrfTokenlist"] = $keys;
			
			unset($sessionSet);
			unset($sessionkey);
			unset($keys);
			
			return $isMatch;
		}
		
		public static function flushKeys(){
			csrf::startSession();
			if(!empty($_SESSION["jomres_csrfTokenlist"]) || isset($_SESSION["jomres_csrfTokenlist"])){
				$_SESSION["jomres_csrfTokenlist"] = null;
			}
		}
	} 
	

