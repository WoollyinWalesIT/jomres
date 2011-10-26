<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


jr_import('jomres_content_tabs');

/**
#
 * Creates the Jomres config panel object
 #
* @package Jomres
* @since 2.6
#
*/
class jomres_configpanel extends jomres_content_tabs
	{
	/**
	#
	* Inserts the settings into the panes array
	#
	*/
	function insertSetting()
		{
		$rowclass="";
		if (!$this->counter)
			$this->counter=0;
		if ($this->counter%2)
			$rowclass="odd";
		else
			$rowclass="even";
		$this->panes[]='
		<tr class="'.$rowclass.'">
			<td>'.$this->left.'</td>
			<td>'.$this->middle.'</td>
			<td>'.$this->right.'</td>
		</tr>
		';
		$this->left="&nbsp;";
		$this->middle="&nbsp;";
		$this->right="&nbsp;";
		$this->counter++;
		}

	/**
	#
	* setleft panel
	#
	*/
	function setleft($val="&nbsp;")
		{
		$this->left=$val;
		}
	/**
	#
	* setmiddle panel
	#
	*/
	function setmiddle($val="&nbsp;")
		{
		$this->middle=$val;
		}
	/**
	#
	* setright panel
	#
	*/
	function setright($val="&nbsp;")
		{
		$this->right=$val;
		}
	}
?>