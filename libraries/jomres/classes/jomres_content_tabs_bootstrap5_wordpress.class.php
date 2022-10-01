<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.5
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

use Joomla\CMS\Factory;

/**
 *
 * @package Jomres\Core\Classes
 *
 * Creates the Jomres config panel object.
 *
 *
 */
class jomres_content_tabs_bootstrap5_wordpress
{
	/**
	 *
	 *
	 *
	 */

	public function __construct()
	{
		$this->panes = array();
		$this->paneLink = array();
		$this->counter = 0;
		$this->panelNames = array();
		$this->randomString = '';
		$this->useCookies = false;
		$this->result = '';
	}

	/**
	 * Starts the tabs.
	 */
	public function startTabs()
	{
		$this->result .= '
            <div class="container"><!-- start tabs panel -->';
	}

	/**
	 * Starts the panel.
	 */
	public function startPanel($tabpage)
	{
		$this->content = '';
		$active = '';
		if (!get_showtime('first_tab_active')) {
			$active = 'active';
			set_showtime('first_tab_active', true);
		}

		$anchor = generateJomresRandomString(10);
		$this->panelNames[ ] = $anchor;
		$this->paneLink[ ] = '<button aria-expanded="'. $active.'" aria-controls="'. $anchor.'" role="tab" type="button">'.$tabpage.'</button>
		';
		$this->panes[$this->counter] = array(
			'pane_button' => '
    	            <li class="nav-item"> <!-- nav item start --> 
						<a class="nav-link '.$active.' " href="#'.$anchor.'" id="tab_'.$anchor.'" data-bs-toggle="tab" aria-expanded="'.$active.'">'.$tabpage.'</a>
					</li> <!-- nav item end -->' ,
			'pane_name' => $tabpage,
			'pane_anchor' => $anchor,
			'pane_active' => $active,
			);
	}

	/**
	 * Inserts content into the panel.
	 */
	public function insertContent($content = '')
	{
		if ($content == '') {
			$content = $this->content;
		}

		   $this->panes[$this->counter]['pane_content'] = '
			<div id="'.$this->panes[$this->counter]['pane_anchor'].'" class="tab-pane '.$this->panes[$this->counter]['pane_active'].'">  <!-- nav content start --> '.
			$content.'
			</div>  <!-- nav content end --> ';
	}

	/**
	 * Ends the panel.
	 */
	public function endPanel()
	{
		$this->counter++;
	}

	/**
	 * Ends the tabs.
	 */
	public function endTabs()
	{
		$result = '
				<ul class="nav nav-tabs">';

		foreach ($this->panes as $counter => $pane) {
			$result .=
			$pane['pane_button'].'
				';
		}
		$result .= '</ul>
				<div class="tab-content"> <!-- tab content start --> 
';

		foreach ($this->panes as $counter => $pane) {
			$result .=
				$pane['pane_content'].'
				';
		}
		$this->result .= $result.'
				</div>  <!-- tab content end -->
				';

		echo $this->result;
	}

	/**
	 * Adds content to the this->content array variable.
	 */
	public function setcontent($val = '&nbsp;')
	{
		$this->content .= $val;
	}
}
