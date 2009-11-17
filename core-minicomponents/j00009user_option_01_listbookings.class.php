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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j00009user_option_01_listbookings {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00009user_option_01_listbookings($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		if ($thisJRUser->userIsRegistered)
			{
			$query="SELECT guests_uid FROM #__jomres_guests WHERE mos_userid = ".(int)$thisJRUser->id;
			$guestEntries=doSelectSql($query);
			if (count($guestEntries)>0)
				{
				$this->cpanelButton=jomres_mainmenu_option(JOMRES_SITEPAGE_URL."&task=mulistbookings", '', jr_gettext('_JOMCOMP_MYUSER_LISTBOOKINGS',_JOMCOMP_MYUSER_LISTBOOKINGS,true,true) );
				}
			}
		}
	
	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMCOMP_MYUSER_LISTBOOKINGS',_JOMCOMP_MYUSER_LISTBOOKINGS);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}
	}
?>