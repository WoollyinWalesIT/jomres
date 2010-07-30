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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j06002sendbug {
	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j06002sendbug()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		if (!$thisJRUser->superPropertyManager)
			return;
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		if ($thisJRUser->superPropertyManager)
			{
			$toemail="bugs@jomres.net";
			$subject = jomresGetParam( $_REQUEST, 'subject', '' );
			$fromname = jomresGetParam( $_REQUEST, 'fromname', '' );
			$fromemail = jomresGetParam( $_REQUEST, 'fromemail', '' );
			$contents = jomresGetParam( $_REQUEST, 'contents', '' );
			/*
			if (defined('_JOMRES_NEWJOOMLA') )
				{
				$result=JUtility::sendMail($fromemail, $fromname, $toemail, $subject, $contents,$mode=1);
				}
			else
				$result=mosMail( $fromemail, $fromname, $toemail, $subject, $contents,$mode=1);
			*/
			
			$result = jomresMailer( $fromemail, $fromname, $toemail, $subject, $contents,$mode=1);

			if ($result)
				{
				$jomres_messaging =jomres_getSingleton('jomres_messages');
				//$jomres_messaging = new jomres_messages();
				$jomres_messaging->set_message("Bug report sent.");
				jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL));
				}
			else
				{
				echo "There was a problem with sending your email. Is emailing available to this server? Possibly not if you're on localhost<br>";
				echo "Here are the contents of your bug report. Please send them manually to <i>bugs [AT] jomres [DOT] net</i><br>";
				echo '<textarea style="WIDTH:100%;" name="contents"  rows="25">'.$contents.'</textarea>';
				}
			}
		else
			return;
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>