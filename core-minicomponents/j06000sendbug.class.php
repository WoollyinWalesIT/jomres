<?php
/**
#
 * Mini-component core file:
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $Itemid,$thisJRUser;
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		if ($thisJRUser->superPropertyManager)
			{
			$toemail="bugs@jomres.net";
			$subject = jomresGetParam( $_REQUEST, 'subject', '' );
			$fromname = jomresGetParam( $_REQUEST, 'fromname', '' );
			$fromemail = jomresGetParam( $_REQUEST, 'fromemail', '' );
			$contents = jomresGetParam( $_REQUEST, 'contents', '' );
			if (defined('_JOMRES_NEWJOOMLA') )
				{
				$result=JUtility::sendMail($fromemail, $fromname, $toemail, $subject, $contents,$mode=1);
				}
			else
				$result=mosMail( $fromemail, $fromname, $toemail, $subject, $contents,$mode=1);
			if ($result)
				jomresRedirect( jomresURL("index.php?option=com_jomres&Itemid=".$Itemid),"Bug report sent.");
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