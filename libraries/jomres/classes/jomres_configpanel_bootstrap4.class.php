<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.6
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

jr_import('jomres_content_tabs');

/**
 *
 * @package Jomres\Core\Classes
 *
 * Creates the Jomres config panel object.
 * 
 */
class jomres_configpanel_bootstrap4 extends jomres_content_tabs
{
	/**
	 * Inserts the settings into the panes array.
	 */
	public function insertSetting()
	{
		$rowclass = '';

		if ($this->counter % 2) {
			$rowclass = 'row-even';
		} else {
			$rowclass = 'row-odd';
		}

		$this->panes[ ] = '
			<div class="col-md-12 ' .$rowclass.'">
				<div class="row">
					<div class="col-md-3">' .$this->left.'</div>
					<div class="col-md-4">' .$this->middle.'</div>
					<div class="col-md-5">' .$this->right.'</div>
				</div>
			</div>
			';

		$this->left = '&nbsp;';
		$this->middle = '&nbsp;';
		$this->right = '&nbsp;';
		++$this->counter;
	}

	/**
	 * Inserts a description row.
	 */
	public function insertDescription($description = '', $class = 'alert alert-info')
	{
		$this->panes[ ] = '<div class="row"><div class="col-md-12"><p class="'.$class.'">'.$description.'</p></div></div>';
	}

	/**
	 * Inserts a heading.
	 */
	public function insertHeading($text = '', $type = 'h3')
	{
		$this->panes[ ] = '<div class="row"><div class="col-md-12"><'.$type.'>'.$text.'</'.$type.'></div></div>';
	}

	/**
	 * setleft panel.
	 */
	public function setleft($val = '&nbsp;')
	{
		$this->left = $val;
	}

	/**
	 * setmiddle panel.
	 */
	public function setmiddle($val = '&nbsp;')
	{
		$this->middle = $val;
	}

	/**
	 * setright panel.
	 */
	public function setright($val = '&nbsp;')
	{
		$this->right = $val;
	}
}
