<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.27
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 * Utility class for all HTML drawing classes.
 */
class jomresHTML
{
    public static function makeOption($val, $text = '', $value_name = 'value', $text_name = 'text')
    {
        if (!defined('SELECTLISTJAVASCRIPT') && using_bootstrap() && !AJAXCALL) {
            echo '
			<script>
			jomresJquery(function(jomresJquery) {
				jomresJquery(\'div.btn-group[data-toggle-name="*"]\').each(function(){
					var group   = jomresJquery(this);
					var form    = group.parents(\'form\').eq(0);
					var name    = group.attr(\'data-toggle-name\');
					var hidden  = jomresJquery(\'input[name="\' + name + \'"]\', form);
					jomresJquery(\'button\', group).each(function(){
						
						var button = jomresJquery(this);
						button.live(\'click\', function(){
							hidden.val(jomresJquery(this).val());
					});
					if(button.val() == hidden.val()) {
						button.addClass(\'btn-primary active\');
					  }
					});
				  });
				});
			</script>
			';
            define('SELECTLISTJAVASCRIPT', 1);
        }

        if (!isset($value)) {
            $value = '';
        }
        $obj = new stdClass();
        $obj->$value_name = $val;
        $obj->$text_name = trim($text) ? $text : $value;

        return $obj;
    }

    public static function selectList($arr, $name, $attribs, $key, $text, $default = null, $use_bootstrap_radios = true)
    {
        $not_for_these_dropdowns = array('jomreslang', 'jomres_editing_mode', 'user_timezone', 'existingCustomers', 'management_process', 'all_guests', 'force[]', 'guestnumber', 'country', 'region', 'town', 'show_all', 'deposit_paid', 'booked_in', 'fixedPeriod_periodsRequested');
        if (!$use_bootstrap_radios) {
            $not_for_these_dropdowns[ ] = $name;
        }

        if (!using_bootstrap() || count($arr) != 2 || in_array($name, $not_for_these_dropdowns) || get_showtime('task') == 'handlereq') {
            $attribs = str_replace('class="inputbox"', '', $attribs);
            $attribs = str_replace('class="input-medium"', '', $attribs);

            $attribs .= ' class="input-medium form-control" ';

            $output = '<select name="'.$name.'" id="'.$name.'" '.$attribs.'>';
            for ($i = 0, $n = count($arr); $i < $n; ++$i) {
                $k = $arr[ $i ]->$key;
                $txt = $arr[ $i ]->$text;
                $selected = '';
                if ($k == $default) {
                    $selected .= ' selected="selected" ';
                }
                $output .= '<option value="'.$k.'" '.$selected.'>'.$txt.'</option>';
            }
            $output .= '</select>';
        } else {
            $output = '
			<fieldset id="' .$name.'" class="radio btn-group">
			';
            for ($i = 0, $n = count($arr); $i < $n; ++$i) {
                $k = $arr[ $i ]->$key;
                $txt = $arr[ $i ]->$text;
                //$output .= '<button type="button" value="'.$k.'" class="btn" data-toggle="button">'.$txt.'</button>';
                $checked = '';
                if ($k == $default) {
                    $checked = 'checked="checked" ';
                }
                $output .= '
				<input type="radio" id="' .$name.$k.'" name="'.$name.'" '.$checked.' value="'.$k.'"/>
				<label for="' .$name.$k.'" id="'.$name.$k.'_id" >'.$txt.'</label>
				';
            }
            $output .= '</fieldset>
			';
        }

        return $output;
    }

    public static function integerSelectList($start, $end, $increment, $name, $attribs, $selected, $format = '', $use_bootstrap_radios = true)
    {
        $attribs = str_replace(' class="inputbox" ', '', $attribs);
        $attribs = str_replace(' class="input-medium" ', '', $attribs);
        $attribs .= ' class="input-small"';

        $arry = array();
        for ($i = (int) $start; $i <= (int) $end; $i += (int) $increment) {
            if ($i < 10) {
                $no = sprintf('0%s', $i);
            } else {
                $no = $i;
            }
            $arry[ ] = self::makeOption($i, $no);
        }

        return self::selectList($arry, $name, $attribs, 'value', 'text', $selected, $use_bootstrap_radios);
    }
}
