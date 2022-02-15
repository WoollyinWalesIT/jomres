<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.2.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

jr_import('jomres_content_tabs_bootstrap5');

/**
 *
 * @package Jomres\Core\Classes
 *
 * Creates the Jomres config panel object.
 *
 */
class jomres_configpanel_bootstrap5 extends jomres_content_tabs_bootstrap5
{
    /**
     * Inserts the settings into the panes array.
     */
    public function insertSetting()
    {
        $this->content .= '
			<div class="col-12">
				<div class="row">
					<div class="col-3">' .$this->left.'</div>
					<div class="col-4">' .$this->middle.'</div>
					<div class="col-5">' .$this->right.'</div>
				</div>
			</div>
			';
        $this->insertContent ($this->content);

        $this->left = '&nbsp;';
        $this->middle = '&nbsp;';
        $this->right = '&nbsp;';
        //++$this->counter;
    }

    /**
     * Inserts a description row.
     */
    public function insertDescription($description = '', $class = 'alert alert-info')
    {
        $this->content .= '<div class="row"><div class="col-12"><p class="'.$class.'">'.$description.'</p></div></div>';
    }

    /**
     * Inserts a heading.
     */
    public function insertHeading($text = '', $type = 'h3')
    {
        $this->content .= '<div class="row"><div class="col-12"><'.$type.'>'.$text.'</'.$type.'><hr/></div></div>';
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
        if (trim($val) != '' && $val != '&nbsp;' ) {
            $this->right .= '<hr/>';
        }
    }
}
