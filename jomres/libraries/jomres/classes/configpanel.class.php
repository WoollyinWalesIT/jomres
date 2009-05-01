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

/**
#
 * Creates the Jomres config panel object
 #
* @package Jomres
* @since 2.6
#
*/
class jomres_configpanel extends jomres_contentTabs
	{
	/**
	#
	* Inserts the settings into the panes array
	#
	*/
	function insertSetting()
		{

			$this->panes[]='
			<div class="spacer">
				&nbsp;
			</div>
			<div class="left">
				<div class="jradmin_subheader_ca">'.$this->left.'</div>
			</div>
			<div class="right">
				<div class="jradmin_field_ca">'.$this->middle.'</div>
			</div>
			<div class="middle">
				<div class="jradmin_field_ca">'.$this->right.'</div>
			</div>
			';

		/*
		if ($this->right != "&nbsp;")
			{
			$this->panes[]='
			<div class="spacer">
				&nbsp;
			</div>
			<div class="left">
				<b>'.$this->left.'</b>
			</div>
			<div class="right">
				'.$this->middle.'
			</div>
			<div class="middle">
				'.$this->right.'
			</div>
			';
			}
		else
			{
			$this->panes[]='
			<div class="spacer">
				&nbsp;
			</div>
			<div class="left">
				<b>'.$this->left.'</b>
			</div>
			<div class="middle">
				'.$this->middle.'
			</div>
			';
			}
		*/
		$this->left="&nbsp;";
		$this->middle="&nbsp;";
		$this->right="&nbsp;";
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