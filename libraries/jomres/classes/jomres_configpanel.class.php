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