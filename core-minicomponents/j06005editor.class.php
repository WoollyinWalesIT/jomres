<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.18.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06005editor
{
	public function __construct($componentArgs)
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		if (!defined('REDACTED')) {
			echo "
			<script type=\"text/javascript\">
			var editor_settings = {
				bold		  : { visible : true },
				italic		: { visible : true },
				underline	 : { visible : true },
				strikeThrough : { visible : true },
				
				justifyLeft   : { visible : true },
				justifyCenter : { visible : true },
				justifyRight  : { visible : true },
				justifyFull   : { visible : true },

				indent  : { visible : true },
				outdent : { visible : true },

				subscript   : { visible : true },
				superscript : { visible : true },
				
				undo : { visible : true },
				redo : { visible : true },
				
				insertOrderedList	: { visible : true },
				insertUnorderedList  : { visible : true },
				insertHorizontalRule : { visible : true },

				h4: {
					visible: true,
					className: 'h4',
					command: (jomresJquery.browser.msie || jomresJquery.browser.safari) ? 'formatBlock' : 'heading',
					arguments: (jomresJquery.browser.msie || jomresJquery.browser.safari) ? '<h4>' : 'h4',
					tags: ['h4'],
					tooltip: 'Header 4'
				},
				h5: {
					visible: true,
					className: 'h5',
					command: (jomresJquery.browser.msie || jomresJquery.browser.safari) ? 'formatBlock' : 'heading',
					arguments: (jomresJquery.browser.msie || jomresJquery.browser.safari) ? '<h5>' : 'h5',
					tags: ['h5'],
					tooltip: 'Header 5'
				},
				h6: {
					visible: true,
					className: 'h6',
					command: (jomresJquery.browser.msie || jomresJquery.browser.safari) ? 'formatBlock' : 'heading',
					arguments: (jomresJquery.browser.msie || jomresJquery.browser.safari) ? '<h6>' : 'h6',
					tags: ['h6'],
					tooltip: 'Header 6'
				},
				
				cut   : { visible : false },
				copy  : { visible : false },
				paste : { visible : false },
				html  : { visible: true },
				increaseFontSize : { visible : false },
				decreaseFontSize : { visible : false },
				insertImage : { visible : false },
				h1: { visible: false },
				h2: { visible: false },
				h3: { visible: false },
				h4: { visible: false },
				h5: { visible: false },
				h6: { visible: false },
				createLink: { visible: false },
				unLink: { visible: false },
				subscript: { visible: false },
				superscript: { visible: false },
				code: { visible: false }
				};
			</script>
			";
			jomres_cmsspecific_addheaddata('css', get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/libraries/editor/', 'jquery.wysiwyg.css');
			jomres_cmsspecific_addheaddata('javascript', get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/libraries/editor/', 'jquery.wysiwyg.js');
			jomres_cmsspecific_addheaddata('javascript', get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/libraries/editor/', 'wysiwyg.link.js');
			jomres_cmsspecific_addheaddata('javascript', get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/libraries/editor/', 'wysiwyg.table.js');
			jomres_cmsspecific_addheaddata('javascript', get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/libraries/editor/', 'wysiwyg.i18n.js');
			switch (get_showtime('lang')) {
				case 'cs-CZ':
					$langfile = 'lang.cs.js';
					break;
				case 'de-DE':
					$langfile = 'lang.de.js';
					break;
				case 'es-ES':
					$langfile = 'lang.es.js';
					break;
				case 'fr-FR':
					$langfile = 'lang.fr.js';
					break;
				case 'he-IL':
					$langfile = 'lang.he.js';
					break;
				case 'hr-HR':
					$langfile = 'lang.hr.js';
					break;
				case 'it-IT':
					$langfile = 'lang.it.js';
					break;
				case 'jp-JP':
					$langfile = 'lang.ja.js';
					break;
				case 'nb-NO':
					$langfile = 'lang.nb.js';
					break;
				case 'nl-NL':
					$langfile = 'lang.nl.js';
					break;
				case 'pl-PL':
					$langfile = 'lang.pl.js';
					break;
				case 'pt-BR':
					$langfile = 'lang.pt_br.js';
					break;
				case 'zh-CN':
					$langfile = 'lang.zh-cn.js';
					break;
				case 'sl-SI':
					$langfile = 'lang.sl.js';
					break;
				case 'se-SE':
					$langfile = 'lang.se.js';
					break;
				case 'ru-RU':
					$langfile = 'lang.ru.js';
					break;
				default:
					$langfile = 'lang.en.js';
			}
			jomres_cmsspecific_addheaddata('javascript', get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/libraries/editor/i18n/', $langfile);
			define('REDACTED', 1);
		}

		$ret = '
			<textarea id="editor_' .$componentArgs[ 'name' ].'" name="'.$componentArgs[ 'name' ].'" style="height: '.$componentArgs[ 'height' ].'px; width:95%" autocomplete=\'off\'>
			</textarea><script type="text/javascript">
				jomresJquery(document).ready(function() { jomresJquery(\'#editor_' .$componentArgs[ 'name' ].'\').wysiwyg({ controls: editor_settings });
				jomresJquery(\'#editor_' .$componentArgs[ 'name' ].'\').wysiwyg("insertHtml", "'.$componentArgs[ 'content' ].'");
				});
			</script>
			<br/>
			';
		$this->ret_vals = $ret;
	}

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return $this->ret_vals;
	}
}
