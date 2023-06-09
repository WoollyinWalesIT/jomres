<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.1
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */
	#[AllowDynamicProperties]
class jomresItemToolbar
{

	/**
	 *
	 *
	 *
	 */

	public function __construct()
	{
		$this->newToolbar();
		$this->bs_version = jomres_bootstrap_version();
	}

	/**
	 *
	 *
	 *
	 */

	public function newToolbar()
	{
		$this->toolbar = '';
		$this->items = array();
		$this->secondaryItems = array();
	}

	/**
	 *
	 *
	 *
	 */

	public function addItem($icon, $buttonClass, $task, $link, $title, $submitOnClick = false, $otherParams = '')
	{
		$title = str_replace("'", "\'", $title);
		$title = str_replace('&#39;', "\'", $title);

		if (!isset($buttonClass) || $buttonClass == '') {
			$buttonClass = 'btn-primary';
		}

		if ($submitOnClick) {
			$item = '<a class="btn '.$buttonClass.'" href="javascript:jomres_submitbutton(\''.$task.'\');" '.$otherParams.'><i class="'.$icon.'"></i> '.$title.'</a> ';
		} else {
			$item = '<a class="btn '.$buttonClass.'" href="'.$link.'" style="text-decoration:none;"><i class="'.$icon.'"></i> '.$title.'</a> ';
		}

		$this->items[] = $item;

		return $this->items;
	}

	/**
	 *
	 *
	 *
	 */

	public function addSecondaryItem($icon, $buttonClass, $task, $link, $title, $submitOnClick = false, $otherParams = '')
	{
		$title = str_replace("'", "\'", $title);
		$title = str_replace('&#39;', "\'", $title);

		if ($this->bs_version == '5') {
			$item = '<a class="dropdown-item" href="'.$link.'"><i class="'.$icon.'"></i> '.$title.'</a> ';
		} else {
			$item = '<a tabindex="-1" href="'.$link.'"><i class="'.$icon.'"></i> '.$title.'</a> ';
		}


		$this->secondaryItems[] = $item;

		return $this->secondaryItems;
	}

	/**
	 *
	 *
	 *
	 */

	public function getToolbar()
	{


		if ($this->bs_version == '3' || $this->bs_version == '2') {
			$this->toolbar = '
						<div id="jomres-item-toolbar" class="btn-group">
			';
		} else { // Bootstrap 5
			$this->toolbar = '
						<div class="btn-group" role="group">
			';
		}

		if (!empty($this->items)) {
			foreach ($this->items as $item) {
				$this->toolbar .= $item;
			}
		}

		if (!empty($this->secondaryItems)) {
			if ($this->bs_version == '3') {
				$this->toolbar .= '
				<a class="btn btn-sm btn-default btn-secondary dropdown-toggle" data-toggle="dropdown" href="#"> <span class="caret"></span></a>
					<ul class="dropdown-menu">
				';
			} elseif ($this->bs_version == '5') {
				$this->toolbar .= '
				<a class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" href="#"> <span class="caret">&nbsp;&nbsp;&nbsp;</span></a>
				';
			} else {
				$this->toolbar .= '<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">'.jr_gettext('COMMON_MORE', 'COMMON_MORE', false).' <span class="caret"></span></a><ul class="dropdown-menu">
				';
			}


			if ($this->bs_version == '5') {
				$this->toolbar .= '<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				';
			}


			foreach ($this->secondaryItems as $secondaryItem) {
				if ($this->bs_version == '5') {
					$this->toolbar .= $secondaryItem.'
					';
				} else {
					$this->toolbar .= '<li>'.$secondaryItem.'</li>
					';
				}
			}

			if ($this->bs_version == '5') {
				$this->toolbar .= '</div>
				';
			} else {
				$this->toolbar .= '</ul>
				';
			}
		}

		if ($this->bs_version == '3' || $this->bs_version == '2') {
			$this->toolbar .= '</div>
			';
		} else { // Bootstrap 5
			$this->toolbar .= '</ul>
			';
		}

		return $this->toolbar;
	}
}
