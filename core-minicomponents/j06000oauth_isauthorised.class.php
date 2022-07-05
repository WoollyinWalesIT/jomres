<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j06000oauth_isauthorised
	{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	function __construct()
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch ){$this->template_touchable = false;return;}

		$ePointFilepath=get_showtime('ePointFilepath');
		$result = false;
		
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		
		if (!$thisJRUser->userIsRegistered)
			{
			if (isset($_POST['username']))
				{
				if ( this_cms_is_joomla() )
					{
					$app = JFactory::getApplication();
					$username = $app->input->get('username', '', 'STRING');
					$password = $app->input->get('password', '', 'STRING');
					$result = $app->login(array('username' => $username, 'password' => $password));
					}
				else
					{
					$credentials = array();
					$credentials['user_login'] = jomresGetParam($_POST, 'username', '');
					$credentials['user_password'] = jomresGetParam($_POST, 'password', '');
					$user = wp_signon($credentials);
		 
					if ( is_wp_error($user) ) 
						$result = false;
					else
						{
						$result = true;
						}
					}
		
				if ($result) // we've authenticated the user in the cms, we now need to reload the user's Jomres details
					{
					jr_import("jr_user");
					$thisJRUser = new jr_user();
					$MiniComponents->specificEvent('06005',"oauth_authorise");
					}
				else
					{
					$this->display_login_form();
					}
				}
			else
				{
				$this->display_login_form();
				}
			}
		else
			{
			$MiniComponents->specificEvent('06005',"oauth_authorise");
			}
		}
	
	function display_login_form()
		{
		exit('
		<form action="" method="post">
		  <label>Please login</label><br />
		  User name:<br>
		  <input type="text" name="username"><br>
		  User password:<br>
		  <input type="password" name="password">
		<input type="submit" value="Log in" class="btn btn-primary" name="Submit">
		</form>');
		}



	function getRetVals()
		{
		return null;
		}
	}