<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class jomres_sticky_messages
	{
	function jomres_sticky_messages()
		{
		$jomres_sticky_messages = array();
		if (isset($_COOKIE['jomres_sticky_messages']) )
			$this->jomres_sticky_messages = $_COOKIE['jomres_sticky_messages'];
		}

	function get_messages()
		{
		foreach ($this->jomres_sticky_messages as $key => $val)
			{
			$index = "jomres_sticky_messages[".$key."]";
			setcookie ($index, "", time() - 3600);
			}
		return $this->jomres_sticky_messages;
		}

	function set_message($message)
		{
		$counter = count( $this->jomres_sticky_messages);
		$index = "jomres_sticky_messages[".$counter."]";
		setcookie($index, htmlspecialchars($message));
		}
	}

?>