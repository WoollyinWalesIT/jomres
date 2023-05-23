<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.7.0
	 *
	 * @copyright	2005-2023 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	/**
	 * 	 * @package Jomres\Core\Classes
	 * Utility class for all HTML drawing classes.
	 */
	#[AllowDynamicProperties]
	class jomresHTML
	{
		/**
		 *
		 *
		 *
		 */

		public static function makeOption($val, $text = '', $value_name = 'value', $text_name = 'text')
		{
			if (!defined('SELECTLISTJAVASCRIPT') && using_bootstrap() && !AJAXCALL) {
				echo '
			<script>
			document.addEventListener(\'DOMContentLoaded\', function(){
				jomresJquery(\'div.btn-group[data-toggle-name="*"]\').each(function(){
					var group   = jomresJquery(this);
					var form	= group.parents(\'form\').eq(0);
					var name	= group.attr(\'data-toggle-name\');
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
				}, false);
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

		/**
		 *
		 *
		 *
		 */

		public static function selectList($arr, $name, $attribs, $key, $text, $default = null, $use_bootstrap_radios = true)
		{
			$not_for_these_dropdowns = array('jomreslang', 'jomres_editing_mode', 'user_timezone', 'existingCustomers', 'management_process', 'all_guests', 'force[]', 'guestnumber', 'country', 'region', 'town', 'show_all', 'deposit_paid', 'booked_in', 'fixedPeriod_periodsRequested');
			if (!$use_bootstrap_radios) {
				$not_for_these_dropdowns[ ] = $name;
			}

			$n = count($arr);

			if (!using_bootstrap() || $n != 2 || in_array($name, $not_for_these_dropdowns) || get_showtime('task') == 'handlereq') {
				$pageoutput[0] = array('NAME' => $name, 'ATTRIBS' => $attribs , 'ID' => $name );
				$rows = array();

				foreach ($arr as $k => $v) {
					$val = $v->value;
					$txt = $v->text;

					$selected = '';
					if ($val == $default) {
						$selected = ' selected="selected" ';
					}

					$rows[] = [ 'KEY' => $val, 'TEXT' => $txt , 'SELECTED' => $selected];
				}

				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
				$tmpl->readTemplatesFromInput('select_list.html');
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->addRows('rows', $rows);
				$output = $tmpl->getParsedTemplate();

			} else {
				$output = '<fieldset id="' .$name.'" class="radio btn-group">';

				foreach ($arr as $k => $v) {
					$val = $v->$key;
					$txt = $v->$text;

					$checked = '';
					if ($val == $default) {
						$checked = 'checked="checked" ';
					}

					$output .= '
				<input type="radio" id="' .$name.$val.'" name="'.$name.'" '.$checked.' value="'.$val.'"/>
				<label for="' .$name.$val.'" id="'.$name.$val.'_id" >'.$txt.'</label>
				';
				}

				$output .= '</fieldset>';
			}

			return $output;
		}

		/**
		 *
		 *
		 *
		 */

		public static function integerSelectList($start, $end, $increment, $name, $attribs, $selected, $format = '', $use_bootstrap_radios = true)
		{
			$attribs = str_replace(' class="inputbox" ', '', $attribs);
			$attribs = str_replace(' class="input-medium" ', '', $attribs);
			$attribs .= ' class="input-small form-control form-select"';

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
