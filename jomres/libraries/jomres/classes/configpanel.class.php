<?php
/**
#
 * Creates the Jomres config panel object
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
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