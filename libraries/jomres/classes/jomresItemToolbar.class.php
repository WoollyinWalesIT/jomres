<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.22
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomresItemToolbar
{
    public function newToolbar()
    {
        $this->toolbar = '';
        $this->items = array();
        $this->secondaryItems = array();
    }

    public function addItem($icon, $buttonClass, $task, $link, $title, $submitOnClick = false, $otherParams = '')
    {
        $title = str_replace("'", "\'", $title);
        $title = str_replace('&#39;', "\'", $title);

        if ($submitOnClick) {
            $item = '<a class="'.$buttonClass.' btn-sm" href="javascript:jomres_submitbutton(\''.$task.'\');" '.$otherParams.'><i class="'.$icon.'"></i> '.$title.'</a> ';
        } else {
            $item = '<a class="'.$buttonClass.' btn-sm" href="'.$link.'" '.$otherParams.'><i class="'.$icon.'"></i> '.$title.'</a> ';
        }

        $this->items[] = $item;

        return $this->items;
    }

    public function addSecondaryItem($icon, $buttonClass, $task, $link, $title, $submitOnClick = false, $otherParams = '')
    {
        $title = str_replace("'", "\'", $title);
        $title = str_replace('&#39;', "\'", $title);

        $item = '<a tabindex="-1" href="'.$link.'"><i class="'.$icon.'"></i> '.$title.'</a> ';

        $this->secondaryItems[] = $item;

        return $this->secondaryItems;
    }

    public function getToolbar()
    {
        $this->toolbar = '<div id="jomres-item-toolbar" class="btn-group">';

        if (count($this->items) > 0) {
            foreach ($this->items as $item) {
                $this->toolbar .= $item;
            }
        }

        if (count($this->secondaryItems) > 0) {
            if (jomres_bootstrap_version() == '3') {
                $this->toolbar .= '<a class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" href="#"> <span class="caret"></span></a><ul class="dropdown-menu">';
            } else {
                $this->toolbar .= '<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">'.jr_gettext('COMMON_MORE', 'COMMON_MORE', false).' <span class="caret"></span></a><ul class="dropdown-menu">';
            }
            foreach ($this->secondaryItems as $secondaryItem) {
                $this->toolbar .= '<li>'.$secondaryItem.'</li>';
            }
            $this->toolbar .= '</ul>';
        }

        $this->toolbar .= '</div>';

        return $this->toolbar;
    }
}
