<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
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
	#[AllowDynamicProperties]
class jomres_content_tabs_bootstrap5
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

		if (this_cms_is_joomla()== true) {
			Factory::getDocument()->getWebAssetManager()
				->useStyle('webcomponent.joomla-tab')
				->useScript('webcomponent.joomla-tab');
		}
	}

	/**
	 * Starts the tabs.
	 */
	public function startTabs()
	{
		if (jomres_cmsspecific_areweinadminarea()) {
			$orientation = 'horizontal';
		} else {
			$orientation = 'vertical';
		}

		echo '
            <joomla-tab id="myTab" orientation="'. $orientation.'" recall="" breakpoint="768" view="tabs"><!-- start tabs panel -->';
	}

	/**
	 * Starts the panel.
	 */
	public function startPanel($tabpage)
	{
		$this->content = '';
		$active = 'false';
		if (!get_showtime('first_tab_active')) {
			$active = 'true';
			set_showtime('first_tab_active', true);
		}

		//$anchor = preg_replace( '/[^A-Za-z0-9_-]+/', "", $tabpage );
		//if ( strlen( $anchor ) == 0 ) // Do not re-enable this line. We need a random string here as phrases like "reservas" can appear in multiple places in the page, making individual tabs unable to show.
		$anchor = generateJomresRandomString(10);
		$this->panelNames[ ] = $anchor;
		$this->paneLink[ ] = '<button aria-expanded="'. $active.'" aria-controls="'. $anchor.'" role="tab" type="button">'.$tabpage.'</button>
		';
		$this->panes[$this->counter] = array(
			'pane_button' => '
                <button aria-expanded="'.$active.'" aria-controls="'.$anchor.'" type="button" hidden="">
                                        <span class="accordion-title">
                                                '.$tabpage.'
                                                <span class="accordion-icon"></span>
                                        </span>
                </button><!-- start content tab panel -->' ,
			'pane_name' => $tabpage,
			'pane_anchor' => $anchor
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
		$this->panes[$this->counter]['pane_content'] = $content;
	}

	/**
	 * Ends the panel.
	 */
	public function endPanel()
	{
	   // $this->panes[ ] = '<!-- end content tab panel -->';
		$this->counter++;
	}

	/**
	 * Ends the tabs.
	 */
	public function endTabs()
	{
		foreach ($this->panes as $counter => $pane) {
			echo
			$pane['pane_button'].
				'  
                <joomla-tab-element id="'.$pane['pane_anchor'].'" name="'.$pane['pane_name'].'" role="tabpanel">
                
                <fieldset class="uploadform option-fieldset options-form">
								<legend>'.$pane['pane_name'].'</legend>

                
                '.$pane['pane_content'].'
                </fieldset>
                </joomla-tab-element> <!-- end tabs content -->
		';
		}

		echo '</joomla-tab> <!-- end joomla-tab -->';
	}

	/**
	 * Adds content to the this->content array variable.
	 */
	public function setcontent($val = '&nbsp;')
	{
		$this->content .= $val;
	}
}
