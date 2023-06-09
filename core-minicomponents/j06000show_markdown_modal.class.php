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
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j06000show_markdown_modal
{

	/**
	 *
	 * Constructor
	 *
	 * Main functionality of the Minicomponent
	 *
	 *
	 *
	 */
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			return;
		}
		
		$output = array();
		$this->retVals = '';

		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}

		$output[ '_JOMRES_MARKDOWN_TITLE' ] = jr_gettext('_JOMRES_MARKDOWN_TITLE', '_JOMRES_MARKDOWN_TITLE', false);
		$output[ '_JOMRES_MARKDOWN_DESC' ] = jr_gettext('_JOMRES_MARKDOWN_DESC', '_JOMRES_MARKDOWN_DESC', false);
		$output[ '_JOMRES_MARKDOWN_EMPHASIS' ] = jr_gettext('_JOMRES_MARKDOWN_EMPHASIS', '_JOMRES_MARKDOWN_EMPHASIS', false);
		$output[ '_JOMRES_MARKDOWN_BOLD' ] = jr_gettext('_JOMRES_MARKDOWN_BOLD', '_JOMRES_MARKDOWN_BOLD', false);
		$output[ '_JOMRES_MARKDOWN_ITALICS' ] = jr_gettext('_JOMRES_MARKDOWN_ITALICS', '_JOMRES_MARKDOWN_ITALICS', false);
		$output[ '_JOMRES_MARKDOWN_STRIKETHROUGH' ] = jr_gettext('_JOMRES_MARKDOWN_STRIKETHROUGH', '_JOMRES_MARKDOWN_STRIKETHROUGH', false);
		$output[ '_JOMRES_MARKDOWN_HEADERS' ] = jr_gettext('_JOMRES_MARKDOWN_HEADERS', '_JOMRES_MARKDOWN_HEADERS', false);
		$output[ '_JOMRES_MARKDOWN_BIGHEADER' ] = jr_gettext('_JOMRES_MARKDOWN_BIGHEADER', '_JOMRES_MARKDOWN_BIGHEADER', false);
		$output[ '_JOMRES_MARKDOWN_MEDIUMHEADER' ] = jr_gettext('_JOMRES_MARKDOWN_MEDIUMHEADER', '_JOMRES_MARKDOWN_MEDIUMHEADER', false);
		$output[ '_JOMRES_MARKDOWN_SMALLHEADER' ] = jr_gettext('_JOMRES_MARKDOWN_SMALLHEADER', '_JOMRES_MARKDOWN_SMALLHEADER', false);
		$output[ '_JOMRES_MARKDOWN_TINYHEADER' ] = jr_gettext('_JOMRES_MARKDOWN_TINYHEADER', '_JOMRES_MARKDOWN_TINYHEADER', false);
		$output[ '_JOMRES_MARKDOWN_LISTS' ] = jr_gettext('_JOMRES_MARKDOWN_LISTS', '_JOMRES_MARKDOWN_LISTS', false);
		$output[ '_JOMRES_MARKDOWN_GENERICLISTITEM' ] = jr_gettext('_JOMRES_MARKDOWN_GENERICLISTITEM', '_JOMRES_MARKDOWN_GENERICLISTITEM', false);
		$output[ '_JOMRES_MARKDOWN_NUMBEREDLISTITEM' ] = jr_gettext('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', '_JOMRES_MARKDOWN_NUMBEREDLISTITEM', false);
		$output[ '_JOMRES_MARKDOWN_LINKS' ] = jr_gettext('_JOMRES_MARKDOWN_LINKS', '_JOMRES_MARKDOWN_LINKS', false);
		$output[ '_JOMRES_MARKDOWN_LINKSTEXT' ] = jr_gettext('_JOMRES_MARKDOWN_LINKSTEXT', '_JOMRES_MARKDOWN_LINKSTEXT', false);
		$output[ '_JOMRES_MARKDOWN_IMAGES' ] = jr_gettext('_JOMRES_MARKDOWN_IMAGES', '_JOMRES_MARKDOWN_IMAGES', false);
		$output[ '_JOMRES_MARKDOWN_TABLE' ] = jr_gettext('_JOMRES_MARKDOWN_TABLE', '_JOMRES_MARKDOWN_TABLE', false);
		$output[ '_JOMRES_MARKDOWN_COLUMN' ] = jr_gettext('_JOMRES_MARKDOWN_COLUMN', '_JOMRES_MARKDOWN_COLUMN', false);

		$pageoutput = array();
		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->readTemplatesFromInput('markdown.html');
		$template = $tmpl->getParsedTemplate();
		if ($output_now) {
			echo $template;
		} else {
			$this->retVals = $template;
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
