<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j06000sendbug {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j06000sendbug()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $thisJRUser;
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